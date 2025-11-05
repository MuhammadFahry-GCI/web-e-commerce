@extends('layouts.master')

@section('title', 'Tentang Kami - ElektroMart')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4">Tentang ElektroMart</h1>
        <p class="text-xl">Toko Elektronik Terpercaya Sejak 2015</p>
    </div>
</div>

<!-- About Content -->
<div class="container mx-auto px-4 py-12">
    <!-- Company Story -->
    <div class="max-w-4xl mx-auto mb-16">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-6 text-center">Cerita Kami</h2>
            <div class="prose max-w-none text-gray-700 leading-relaxed space-y-4">
                <p>
                    <strong>ElektroMart</strong> adalah toko elektronik terpercaya yang telah melayani pelanggan di seluruh Indonesia sejak tahun 2015. Kami berkomitmen untuk menyediakan produk elektronik berkualitas tinggi dengan harga yang kompetitif dan layanan pelanggan terbaik.
                </p>
                <p>
                    Berawal dari sebuah toko kecil di Jakarta, kini ElektroMart telah berkembang menjadi salah satu e-commerce elektronik terkemuka dengan ribuan produk dari berbagai brand ternama dunia. Kami bangga telah melayani lebih dari 100.000 pelanggan dengan tingkat kepuasan 4.8/5.
                </p>
                <p>
                    Dengan tim yang berpengalaman dan berdedikasi, kami terus berinovasi untuk memberikan pengalaman berbelanja online yang mudah, aman, dan menyenangkan bagi seluruh pelanggan kami.
                </p>
            </div>
        </div>
    </div>

    <!-- Vision & Mission -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
        <div class="bg-blue-50 rounded-lg p-8">
            <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-eye text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Visi Kami</h3>
            <p class="text-gray-700 leading-relaxed">
                Menjadi platform e-commerce elektronik terdepan di Indonesia yang memberikan pengalaman berbelanja online terbaik dengan produk berkualitas, harga kompetitif, dan layanan prima.
            </p>
        </div>
        <div class="bg-green-50 rounded-lg p-8">
            <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-bullseye text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Misi Kami</h3>
            <ul class="text-gray-700 space-y-2">
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-green-600 mt-1 mr-2"></i>
                    <span>Menyediakan produk elektronik original dengan garansi resmi</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-green-600 mt-1 mr-2"></i>
                    <span>Memberikan harga terbaik dan penawaran menarik</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-green-600 mt-1 mr-2"></i>
                    <span>Melayani pelanggan dengan profesional dan responsif</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Our Values -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center">Nilai-Nilai Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-certificate text-blue-600 text-2xl"></i>
                </div>
                <h3 class="font-bold mb-2">Kualitas</h3>
                <p class="text-gray-600 text-sm">Produk original dan berkualitas tinggi</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-handshake text-green-600 text-2xl"></i>
                </div>
                <h3 class="font-bold mb-2">Kepercayaan</h3>
                <p class="text-gray-600 text-sm">Transparansi dan integritas dalam berbisnis</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-smile text-orange-600 text-2xl"></i>
                </div>
                <h3 class="font-bold mb-2">Kepuasan</h3>
                <p class="text-gray-600 text-sm">Prioritas utama adalah kepuasan pelanggan</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-lightbulb text-purple-600 text-2xl"></i>
                </div>
                <h3 class="font-bold mb-2">Inovasi</h3>
                <p class="text-gray-600 text-sm">Terus berinovasi untuk pelayanan terbaik</p>
            </div>
        </div>
    </div>

    <!-- Statistics -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-lg shadow-lg p-12 mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center">ElektroMart dalam Angka</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold mb-2">10+</div>
                <div class="text-blue-200">Tahun Pengalaman</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold mb-2">100K+</div>
                <div class="text-blue-200">Pelanggan Puas</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold mb-2">5000+</div>
                <div class="text-blue-200">Produk Tersedia</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold mb-2">4.8/5</div>
                <div class="text-blue-200">Rating Kepuasan</div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center">Mengapa Memilih ElektroMart?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="bg-blue-600 text-white w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-shield-alt text-xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-3">Garansi Resmi</h3>
                <p class="text-gray-600 text-sm">Semua produk dilengkapi dengan garansi resmi dari distributor atau brand langsung. Anda dapat berbelanja dengan tenang tanpa khawatir.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="bg-green-600 text-white w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-truck text-xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-3">Pengiriman Cepat</h3>
                <p class="text-gray-600 text-sm">Pengiriman ke seluruh Indonesia dengan gratis ongkir untuk pembelian minimum. Produk dikemas dengan aman dan rapi.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="bg-orange-600 text-white w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-headset text-xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-3">Customer Service 24/7</h3>
                <p class="text-gray-600 text-sm">Tim customer service kami siap membantu Anda kapan saja melalui WhatsApp, telepon, atau email untuk menjawab semua pertanyaan Anda.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="bg-purple-600 text-white w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-credit-card text-xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-3">Pembayaran Aman</h3>
                <p class="text-gray-600 text-sm">Berbagai metode pembayaran yang aman dan terpercaya: transfer bank, e-wallet, kartu kredit, hingga COD.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="bg-red-600 text-white w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-tag text-xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-3">Harga Terbaik</h3>
                <p class="text-gray-600 text-sm">Kami menjamin harga terbaik dengan berbagai promo menarik setiap bulan. Dapatkan cashback dan diskon hingga 50%.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="bg-yellow-600 text-white w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-star text-xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-3">Produk Original</h3>
                <p class="text-gray-600 text-sm">100% produk original dari brand ternama. Kami tidak menjual barang palsu atau rekondisi tanpa keterangan.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-50 rounded-lg p-12 text-center">
        <h2 class="text-3xl font-bold mb-4">Siap Berbelanja?</h2>
        <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
            Jelajahi ribuan produk elektronik berkualitas dengan harga terbaik. Dapatkan penawaran eksklusif dan gratis ongkir!
        </p>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('products') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold">
                Belanja Sekarang
            </a>
            <a href="{{ route('contact') }}" class="bg-white hover:bg-gray-100 text-blue-600 border-2 border-blue-600 px-8 py-3 rounded-lg font-semibold">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>
@endsection
