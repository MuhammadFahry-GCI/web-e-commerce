@extends('layouts.master')

@section('title', 'ElektroMart - Beranda')

@section('content')
<!-- Hero Banner -->
<div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="container mx-auto px-4 py-16">
        <div class="flex items-center justify-between">
            <div class="max-w-xl">
                <h1 class="text-5xl font-bold mb-4">Belanja Elektronik Jadi Mudah!</h1>
                <p class="text-xl mb-6">Dapatkan produk elektronik berkualitas dengan harga terbaik dan garansi resmi.</p>
                <a href="{{ route('products') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 inline-block">
                    Belanja Sekarang
                </a>
            </div>
            <div class="hidden md:block">
                <i class="fas fa-laptop text-9xl opacity-50"></i>
            </div>
        </div>
    </div>
</div>

<!-- Promo Banner -->
<div class="bg-yellow-400 py-3">
    <div class="container mx-auto px-4 text-center">
        <p class="font-semibold"><i class="fas fa-fire text-red-600"></i> FLASH SALE! Diskon hingga 50% untuk kategori Audio & Video! <i class="fas fa-fire text-red-600"></i></p>
    </div>
</div>

<!-- Categories -->
<div class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold mb-8 text-center">Kategori Produk</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach($categories as $category)
        <a href="{{ route('products', ['category' => $category->slug]) }}" class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition text-center">
            <i class="fas {{ $category->icon }} text-5xl text-blue-600 mb-4"></i>
            <h3 class="font-semibold">{{ $category->name }}</h3>
            <p class="text-sm text-gray-500">{{ $category->products_count }} produk</p>
        </a>
        @endforeach
    </div>
</div>

<!-- Featured Products -->
<div class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold">Produk Unggulan</h2>
            <a href="{{ route('products') }}" class="text-blue-600 hover:underline">Lihat Semua →</a>
        </div>

        @if($featuredProducts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach($featuredProducts as $product)
            <div class="bg-white rounded-lg shadow hover:shadow-xl transition flex flex-col h-full">
                <div class="relative h-48 flex-shrink-0">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover rounded-t-lg">
                    @else
                        <div class="w-full h-full bg-gray-200 rounded-t-lg flex items-center justify-center">
                            <i class="fas fa-image text-4xl text-gray-400"></i>
                        </div>
                    @endif

                    @if($product->discount > 0)
                    <span class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded text-sm font-semibold">-{{ $product->discount }}%</span>
                    @endif

                    @if($product->stock == 0)
                    <span class="absolute top-2 left-2 bg-gray-800 text-white px-2 py-1 rounded text-sm">Stok Habis</span>
                    @endif
                </div>
                <div class="p-4 flex flex-col flex-grow">
                    <h3 class="font-semibold mb-2 line-clamp-2 min-h-[3rem]">{{ $product->name }}</h3>
                    <div class="mb-2">
                        @if($product->discount > 0)
                            <span class="text-gray-400 line-through text-sm">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            <span class="text-blue-600 font-bold text-lg block">Rp {{ number_format($product->final_price, 0, ',', '.') }}</span>
                        @else
                            <span class="text-blue-600 font-bold text-lg">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        @endif
                    </div>
                    <p class="text-sm text-gray-600 mb-3">Stok: {{ $product->stock > 0 ? $product->stock : 'Habis' }}</p>
                    <a href="{{ route('product.detail', $product->slug) }}" class="block w-full bg-blue-600 text-white text-center py-2 rounded hover:bg-blue-700 transition mt-auto">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-12">
            <i class="fas fa-box-open text-6xl text-gray-300 mb-4"></i>
            <p class="text-gray-500">Belum ada produk tersedia</p>
        </div>
        @endif
    </div>
</div>
<!-- Why Choose Us -->
<div class="bg-blue-50 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center">Mengapa Pilih Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h3 class="font-semibold mb-2">Garansi Resmi</h3>
                <p class="text-gray-600 text-sm">Semua produk bergaransi resmi</p>
            </div>
            <div class="text-center">
                <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-truck text-2xl"></i>
                </div>
                <h3 class="font-semibold mb-2">Pengiriman Cepat</h3>
                <p class="text-gray-600 text-sm">Gratis ongkir ke seluruh Indonesia</p>
            </div>
            <div class="text-center">
                <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-credit-card text-2xl"></i>
                </div>
                <h3 class="font-semibold mb-2">Pembayaran Aman</h3>
                <p class="text-gray-600 text-sm">Berbagai metode pembayaran</p>
            </div>
            <div class="text-center">
                <div class="bg-orange-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-2xl"></i>
                </div>
                <h3 class="font-semibold mb-2">Customer Service 24/7</h3>
                <p class="text-gray-600 text-sm">Siap membantu kapan saja</p>
            </div>
        </div>
    </div>
</div>
@endsection
