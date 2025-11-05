<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .logo {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .content {
            padding: 30px;
        }
        .alert {
            background: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .alert-title {
            font-weight: bold;
            color: #92400e;
            margin-bottom: 5px;
        }
        .order-info {
            background: #f3f4f6;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .order-info table {
            width: 100%;
        }
        .order-info td {
            padding: 8px 0;
        }
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .items-table th {
            background: #f9fafb;
            padding: 12px;
            text-align: left;
            border-bottom: 2px solid #e5e7eb;
        }
        .items-table td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
        }
        .total-row {
            font-weight: bold;
            background: #f9fafb;
        }
        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            background: #fef3c7;
            color: #92400e;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #6b7280;
            font-size: 14px;
            border-top: 1px solid #e5e7eb;
            margin-top: 30px;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin: 20px 0;
        }
        .payment-info {
            background: #fef3c7;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border: 2px solid #fcd34d;
        }
        .payment-info h3 {
            color: #92400e;
            margin-top: 0;
        }
        .steps {
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            padding: 0 20px;
        }
        .step {
            text-align: center;
            flex: 1;
        }
        .step-number {
            width: 40px;
            height: 40px;
            background: #dbeafe;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: bold;
            color: #1e40af;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">⚡ ElektroMart</div>
            <p style="margin: 0;">Terima kasih atas pesanan Anda!</p>
        </div>

        <div class="content">
            <h2 style="color: #1f2937;">Pesanan Anda Sedang Kami Persiapkan! 📦</h2>

            <div class="alert">
                <div class="alert-title">🎉 Pesanan Berhasil Dibuat!</div>
                <p style="margin: 5px 0 0 0;">Terima kasih telah berbelanja di ElektroMart. Tim kami sedang mempersiapkan pesanan Anda dengan sebaik-baiknya. Mohon menunggu konfirmasi lebih lanjut dari kami.</p>
            </div>

            <p>Halo <strong>{{ $order->shipping_name }}</strong>,</p>
            <p>Pesanan Anda telah kami terima dan sedang dalam proses persiapan. Berikut adalah detail pesanan Anda:</p>

            <div class="order-info">
                <table>
                    <tr>
                        <td style="width: 40%;"><strong>Nomor Pesanan:</strong></td>
                        <td>{{ $order->order_number }}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Pesanan:</strong></td>
                        <td>{{ $order->created_at->format('d F Y, H:i') }} WIB</td>
                    </tr>
                    <tr>
                        <td><strong>Status:</strong></td>
                        <td><span class="status-badge">Sedang Dipersiapkan</span></td>
                    </tr>
                    <tr>
                        <td><strong>Metode Pembayaran:</strong></td>
                        <td>
                            @if($order->payment_method === 'bank_transfer')
                                Transfer Bank
                            @elseif($order->payment_method === 'e_wallet')
                                E-Wallet (OVO/GoPay/Dana)
                            @elseif($order->payment_method === 'credit_card')
                                Kartu Kredit/Debit
                            @else
                                Bayar di Tempat (COD)
                            @endif
                        </td>
                    </tr>
                </table>
            </div>

            <h3>Detail Produk</h3>
            <table class="items-table">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th style="text-align: center;">Jumlah</th>
                        <th style="text-align: right;">Harga</th>
                        <th style="text-align: right;">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->items as $item)
                    <tr>
                        <td>{{ $item->product_name }}</td>
                        <td style="text-align: center;">{{ $item->quantity }}</td>
                        <td style="text-align: right;">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                        <td style="text-align: right;">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" style="text-align: right;"><strong>Subtotal:</strong></td>
                        <td style="text-align: right;">Rp {{ number_format($order->subtotal, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right;"><strong>Ongkos Kirim:</strong></td>
                        <td style="text-align: right;">
                            @if($order->shipping_cost == 0)
                                <span style="color: #16a34a;">Gratis</span>
                            @else
                                Rp {{ number_format($order->shipping_cost, 0, ',', '.') }}
                            @endif
                        </td>
                    </tr>
                    @if($order->discount > 0)
                    <tr>
                        <td colspan="3" style="text-align: right;"><strong>Diskon:</strong></td>
                        <td style="text-align: right; color: #16a34a;">-Rp {{ number_format($order->discount, 0, ',', '.') }}</td>
                    </tr>
                    @endif
                    <tr class="total-row">
                        <td colspan="3" style="text-align: right;"><strong>Total Pembayaran:</strong></td>
                        <td style="text-align: right; color: #2563eb; font-size: 18px;">Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>

            <h3>Alamat Pengiriman</h3>
            <div class="order-info">
                <p style="margin: 0;">
                    <strong>{{ $order->shipping_name }}</strong><br>
                    {{ $order->shipping_phone }}<br>
                    {{ $order->shipping_email }}<br><br>
                    {{ $order->shipping_address }}<br>
                    {{ $order->shipping_city }}, {{ $order->shipping_province }} {{ $order->shipping_postal_code }}
                </p>
            </div>

            @if($order->notes)
            <h3>Catatan Pesanan</h3>
            <div class="order-info">
                <p style="margin: 0;">{{ $order->notes }}</p>
            </div>
            @endif

            @if($order->payment_method === 'bank_transfer')
            <div class="payment-info">
                <h3 style="margin-top: 0;">💳 Instruksi Pembayaran - Transfer Bank</h3>
                <p>Silakan transfer ke salah satu rekening berikut:</p>
                <p style="margin: 15px 0;">
                    <strong>Bank BCA</strong><br>
                    No. Rekening: 1234567890<br>
                    Atas Nama: ElektroMart<br><br>

                    <strong>Bank Mandiri</strong><br>
                    No. Rekening: 0987654321<br>
                    Atas Nama: ElektroMart<br><br>

                    <strong>Bank BNI</strong><br>
                    No. Rekening: 5556667778<br>
                    Atas Nama: ElektroMart
                </p>
                <p style="background: white; padding: 15px; border-radius: 6px; font-weight: bold; color: #1e40af;">
                    Total yang harus dibayar: Rp {{ number_format($order->total, 0, ',', '.') }}
                </p>
                <p style="font-size: 13px; color: #92400e; margin-top: 10px;">
                    ⚠️ Setelah melakukan pembayaran, silakan konfirmasi melalui:<br>
                    📱 WhatsApp: <strong>+62 812-3456-7890</strong><br>
                    📧 Email: <strong>payment@elektromart.com</strong>
                </p>
            </div>
            @elseif($order->payment_method === 'e_wallet')
            <div class="payment-info">
                <h3 style="margin-top: 0;">📱 Instruksi Pembayaran - E-Wallet</h3>
                <p>Anda dapat melakukan pembayaran melalui:</p>
                <ul style="margin: 10px 0;">
                    <li><strong>OVO:</strong> 0812-3456-7890</li>
                    <li><strong>GoPay:</strong> 0812-3456-7890</li>
                    <li><strong>Dana:</strong> 0812-3456-7890</li>
                </ul>
                <p style="background: white; padding: 15px; border-radius: 6px; font-weight: bold; color: #1e40af;">
                    Total yang harus dibayar: Rp {{ number_format($order->total, 0, ',', '.') }}
                </p>
                <p style="font-size: 13px; color: #92400e; margin-top: 10px;">
                    ⚠️ Kirim screenshot bukti transfer ke WhatsApp: <strong>+62 812-3456-7890</strong>
                </p>
            </div>
            @elseif($order->payment_method === 'credit_card')
            <div class="payment-info">
                <h3 style="margin-top: 0;">💳 Instruksi Pembayaran - Kartu Kredit</h3>
                <p>Untuk pembayaran dengan kartu kredit/debit, silakan hubungi customer service kami:</p>
                <p style="margin: 10px 0;">
                    📱 WhatsApp: <strong>+62 812-3456-7890</strong><br>
                    📞 Telepon: <strong>(021) 1234-5678</strong>
                </p>
                <p style="background: white; padding: 15px; border-radius: 6px; font-weight: bold; color: #1e40af;">
                    Total yang harus dibayar: Rp {{ number_format($order->total, 0, ',', '.') }}
                </p>
            </div>
            @else
            <div class="payment-info">
                <h3 style="margin-top: 0;">💵 Bayar di Tempat (COD)</h3>
                <p>Anda memilih pembayaran COD. Silakan siapkan uang tunai sebesar:</p>
                <p style="background: white; padding: 15px; border-radius: 6px; font-weight: bold; color: #1e40af; font-size: 20px;">
                    Rp {{ number_format($order->total, 0, ',', '.') }}
                </p>
                <p style="font-size: 13px; color: #92400e;">
                    💡 Pembayaran dilakukan saat barang sampai di alamat tujuan. Pastikan uang pas untuk mempercepat proses.
                </p>
            </div>
            @endif

            <h3 style="margin-top: 30px;">Apa yang Terjadi Selanjutnya?</h3>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <p style="font-size: 13px; margin: 0;"><strong>Persiapan</strong><br>Tim kami mempersiapkan barang</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <p style="font-size: 13px; margin: 0;"><strong>Pembayaran</strong><br>Lakukan pembayaran sesuai instruksi</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <p style="font-size: 13px; margin: 0;"><strong>Pengiriman</strong><br>Barang dikirim ke alamat Anda</p>
                </div>
            </div>

            <div style="background: #e0f2fe; padding: 20px; border-radius: 8px; margin: 20px 0; text-align: center;">
                <p style="margin: 0 0 10px 0; color: #0c4a6e;">
                    <strong>📦 Pesanan Anda sedang kami persiapkan dengan penuh perhatian!</strong>
                </p>
                <p style="margin: 0; font-size: 14px; color: #0369a1;">
                    Mohon menunggu, kami akan menghubungi Anda segera setelah pesanan siap dikirim.
                </p>
            </div>

            <div style="text-align: center; margin: 30px 0;">
                <p style="margin-bottom: 15px;">Butuh bantuan? Hubungi kami:</p>
                <p style="margin: 5px 0;">
                    📱 WhatsApp: <strong>+62 812-3456-7890</strong><br>
                    📞 Telepon: <strong>(021) 1234-5678</strong><br>
                    📧 Email: <strong>support@elektromart.com</strong>
                </p>
            </div>
        </div>

        <div class="footer">
            <p style="margin: 0 0 10px 0;">Email ini dikirim secara otomatis, mohon tidak membalas email ini.</p>
            <p style="margin: 0;">&copy; {{ date('Y') }} ElektroMart. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</body>
</html>
