@extends('layouts.master')

@section('title', 'Hubungi Kami - ElektroMart')

@section('content')
<div class="bg-blue-600 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">Hubungi Kami</h1>
        <p class="text-xl">Kami siap membantu Anda 24/7</p>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                <form id="contact-form" class="space-y-4">
                    <div>
                        <label class="block text-gray-700 mb-2">Nama Lengkap *</label>
                        <input type="text" name="name" required
                               class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Email *</label>
                        <input type="email" name="email" required
                               class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">No. Telepon</label>
                        <input type="tel" name="phone"
                               class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Subjek *</label>
                        <input type="text" name="subject" required
                               class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Pesan *</label>
                        <textarea name="message" rows="5" required
                                  class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold">
                        <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                    </button>
                </form>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Informasi Kontak</h2>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Alamat</h3>
                            <p class="text-gray-600">Jl. Teknologi Elektronik No. 123<br>Jakarta Selatan, DKI Jakarta 12345<br>Indonesia</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Telepon</h3>
                            <p class="text-gray-600">+62 812-3456-7890<br>+62 21-1234-5678</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-orange-100 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-orange-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Email</h3>
                            <p class="text-gray-600">info@elektromart.com<br>support@elektromart.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-purple-100 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-purple-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Jam Operasional</h3>
                            <p class="text-gray-600">Senin - Jumat: 09:00 - 18:00<br>Sabtu: 09:00 - 15:00<br>Minggu: Tutup</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Ikuti Kami</h2>
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="flex items-center gap-3 p-4 border rounded-lg hover:bg-blue-50 transition">
                        <i class="fab fa-facebook text-3xl text-blue-600"></i>
                        <div>
                            <p class="font-semibold">Facebook</p>
                            <p class="text-sm text-gray-600">@elektromart</p>
                        </div>
                    </a>
                    <a href="#" class="flex items-center gap-3 p-4 border rounded-lg hover:bg-pink-50 transition">
                        <i class="fab fa-instagram text-3xl text-pink-600"></i>
                        <div>
                            <p class="font-semibold">Instagram</p>
                            <p class="text-sm text-gray-600">@elektromart</p>
                        </div>
                    </a>
                    <a href="#" class="flex items-center gap-3 p-4 border rounded-lg hover:bg-blue-50 transition">
                        <i class="fab fa-twitter text-3xl text-blue-400"></i>
                        <div>
                            <p class="font-semibold">Twitter</p>
                            <p class="text-sm text-gray-600">@elektromart</p>
                        </div>
                    </a>
                    <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center gap-3 p-4 border rounded-lg hover:bg-green-50 transition">
                        <i class="fab fa-whatsapp text-3xl text-green-600"></i>
                        <div>
                            <p class="font-semibold">WhatsApp</p>
                            <p class="text-sm text-gray-600">Chat Kami</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Map -->
    <div class="mt-12 bg-white rounded-lg shadow-lg p-4">
        <h2 class="text-2xl font-bold mb-6 px-4 pt-4">Lokasi Kami</h2>
        <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center">
            <div class="text-center">
                <i class="fas fa-map-marked-alt text-6xl text-gray-400 mb-4"></i>
                <p class="text-gray-600">Peta akan ditampilkan di sini</p>
                <p class="text-sm text-gray-500">(Google Maps Integration)</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();

        // Simulate form submission
        alert('Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.');
        this.reset();
    });
</script>
@endsection
