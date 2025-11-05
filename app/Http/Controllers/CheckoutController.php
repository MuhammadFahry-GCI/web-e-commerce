<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller;
use App\Mail\OrderConfirmation;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cartItems = Auth::user()->carts()->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Keranjang Anda kosong!');
        }

        $subtotal = $cartItems->sum(function($item) {
            return $item->product->final_price * $item->quantity;
        });

        $shippingCost = $subtotal >= 500000 ? 0 : 0;
        $total = $subtotal + $shippingCost;

        return view('checkout', compact('cartItems', 'subtotal', 'shippingCost', 'total'));
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'province' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string|max:10',
            'address' => 'required|string',
            'payment_method' => 'required|in:bank_transfer,e_wallet,credit_card,cod',
            'notes' => 'nullable|string',
        ]);

        $cartItems = Auth::user()->carts()->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Keranjang Anda kosong!');
        }

        // Check stock
        foreach ($cartItems as $item) {
            if ($item->product->stock < $item->quantity) {
                return redirect()->route('cart')->with('error', "Stok {$item->product->name} tidak mencukupi! Stok tersedia: {$item->product->stock}");
            }
        }

        DB::beginTransaction();

        try {
            $subtotal = $cartItems->sum(function($item) {
                return $item->product->final_price * $item->quantity;
            });

            $shippingCost = $subtotal >= 500000 ? 0 : 0;
            $total = $subtotal + $shippingCost;

            // Create order
            $order = Order::create([
                'order_number' => Order::generateOrderNumber(),
                'user_id' => Auth::id(),
                'subtotal' => $subtotal,
                'shipping_cost' => $shippingCost,
                'discount' => 0,
                'total' => $total,
                'payment_method' => $validated['payment_method'],
                'status' => 'pending',
                'shipping_name' => $validated['full_name'],
                'shipping_phone' => $validated['phone'],
                'shipping_email' => $validated['email'],
                'shipping_address' => $validated['address'],
                'shipping_city' => $validated['city'],
                'shipping_province' => $validated['province'],
                'shipping_postal_code' => $validated['postal_code'],
                'notes' => $validated['notes'],
            ]);

            // Create order items and update stock
            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'product_name' => $item->product->name,
                    'price' => $item->product->final_price,
                    'quantity' => $item->quantity,
                    'subtotal' => $item->product->final_price * $item->quantity,
                ]);

                // Update stock
                $item->product->decrement('stock', $item->quantity);
            }

            // Clear cart
            Auth::user()->carts()->delete();

            DB::commit();

            // Send email confirmation
            try {
                Mail::to($validated['email'])->send(new OrderConfirmation($order));
            } catch (\Exception $e) {
                // Log error but don't fail the transaction
                \Log::error('Email sending failed: ' . $e->getMessage());
            }

            return redirect()->route('checkout.success', $order->order_number)
                ->with('success', 'Pesanan Anda telah diterima! Email konfirmasi telah dikirim ke ' . $validated['email']);

        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Checkout failed: ' . $e->getMessage());
            return redirect()->route('cart')->with('error', 'Terjadi kesalahan saat memproses pesanan. Silakan coba lagi.');
        }
    }

    public function success($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('checkout-success', compact('order'));
    }
}
