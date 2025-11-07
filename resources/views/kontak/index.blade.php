@extends('layouts.app')

@section('title', 'Hubungi Kami - RUMUS BUMI JAYA')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold orange-text">Hubungi dan Jadi Lebih Dekat dengan Kami</h1>
        <p class="text-gray-600 mt-2">Kami siap membantu dan menjawab pertanyaan Anda</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4 orange-text">Informasi Kontak</h2>

                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Alamat</h3>
                            <p class="text-gray-700">Jl. Desa Bumi Jaya No. 123, Kec. Bumi Jaya, Kab. JAWA, PPK Jawa 15510</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Telepon</h3>
                            <p class="text-gray-700">+62 812-3456-7890</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Email</h3>
                            <p class="text-gray-700">info@rumusbumijaya.desa.id</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Jam Operasional</h3>
                            <p class="text-gray-700">Senin - Jumat: 08:00 - 17:00</p>
                            <p class="text-gray-700">Sabtu: 08:00 - 12:00</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
                <h2 class="text-xl font-semibold mb-4 orange-text">Media Sosial</h2>

                <div class="flex space-x-4">
                    <a href="#" class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-pink-600 rounded-full flex items-center justify-center text-white hover:bg-pink-700 transition duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition duration-300">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center text-white hover:bg-blue-500 transition duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4 orange-text">Kirim Pesan</h2>

                <form action="#" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-primary" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-primary" required>
                    </div>

                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 font-semibold mb-2">Subjek</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-primary" required>
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-primary" required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-orange-primary text-white py-2 px-4 rounded-lg hover:bg-orange-secondary transition duration-300">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-xl font-semibold mb-4 orange-text">Lokasi Kami</h2>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="relative pb-[56.25%] h-0 overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.75663731541688!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1e1e1e1e1e1%3A0x1e1e1e1e1e1e1e1e!2sDesa%20Bumi%20Jaya!5e0!3m2!1sen!2sid!4v1234567890"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    class="absolute top-0 left-0 w-full h-full">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
