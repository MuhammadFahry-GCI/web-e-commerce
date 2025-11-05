<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { background: linear-gradient(135deg, #2563eb, #1e40af); color: white; padding: 30px; text-align: center; }
        .content { padding: 30px; }
        .order-info { background: #f3f4f6; padding: 20px; border-radius: 8px; margin: 20px 0; }
        .alert { background: #fef3c7; border-left: 4px solid #f59e0b; padding: 15px; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="header">
        <h1>⚡ ElektroMart</h1>
        <p>Terima kasih atas pesanan Anda!</p>
    </div>

    <div class="content">
        <div class="alert">
            <strong>🎉 Pesanan Berhasil Dibuat!</strong>
            <p>Tim kami sedang mempersiapkan pesanan Anda. Mohon menunggu konfirmasi lebih lanjut.</p>
        </div>

        <p>Halo <strong>{{customer_name}}</strong>,</p>

        <div class="order-info">
            <p><strong>Nomor Pesanan:</strong> {{order_number}}</p>
            <p><strong>Tanggal:</strong> {{order_date}}</p>
            <p><strong>Total:</strong> Rp {{total}}</p>
            <p><strong>Metode Pembayaran:</strong> {{payment_method}}</p>
        </div>

        <h3>Produk yang Dipesan:</h3>
        <p>{{products}}</p>

        <h3>Alamat Pengiriman:</h3>
        <div class="order-info">
            <p>{{shipping_address}}</p>
        </div>

        <p><strong>📦 Pesanan Anda sedang kami persiapkan!</strong></p>
        <p>Mohon menunggu, kami akan menghubungi Anda segera.</p>

        <p>Butuh bantuan?</p>
        <p>📱 WhatsApp: +62 812-3456-7890</p>
        <p>📧 Email: support@elektromart.com</p>
    </div>
</body>
</html>
