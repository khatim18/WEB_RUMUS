@extends('layouts.app')

@section('title', 'Kisah Sukses - RUMUS BUMI JAYA')

@section('content')
<!-- Hero Section -->
<section class="relative h-80 overflow-hidden">
    <img src="{{ asset('image/kisah-banner.jpg') }}" alt="Kisah Sukses"
        class="w-full h-full object-cover brightness-75">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-3">Kisah Sukses UMKM</h1>
        <p class="text-lg md:text-xl">Perjalanan inspiratif UMKM binaan RUMUS menuju kemandirian dan keberhasilan</p>
    </div>
</section>

<!-- Content Section -->
<section class="container mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-orange-600 mb-8 text-center">Cerita Perubahan Nyata</h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <img src="{{ asset('image/kisah1.jpg') }}" alt="Kisah 1" class="w-full h-52 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Siti Rahma - Pengrajin Anyaman</h3>
                <p class="text-gray-600 mb-3">
                    Dari usaha rumahan kecil, kini produknya menembus pasar nasional berkat pelatihan dan pendampingan RUMUS.
                </p>
                <a href="#" class="text-orange-500 font-semibold hover:underline">Baca Selengkapnya →</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <img src="{{ asset('image/kisah2.jpg') }}" alt="Kisah 2" class="w-full h-52 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Budi Santoso - Kopi Nusantara</h3>
                <p class="text-gray-600 mb-3">
                    Dengan inovasi kemasan dan branding, kopi lokal Bumi Jaya kini hadir di beberapa kafe ternama.
                </p>
                <a href="#" class="text-orange-500 font-semibold hover:underline">Baca Selengkapnya →</a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <img src="{{ asset('image/kisah3.jpg') }}" alt="Kisah 3" class="w-full h-52 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Nuraini - Olahan Pisang</h3>
                <p class="text-gray-600 mb-3">
                    Memanfaatkan hasil kebun desa, Nuraini sukses mengembangkan usaha olahan pisang khas Bumi Jaya.
                </p>
                <a href="#" class="text-orange-500 font-semibold hover:underline">Baca Selengkapnya →</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-orange-500 py-16 text-center text-white">
    <h2 class="text-3xl font-bold mb-4">Ingin Kisahmu Jadi Inspirasi Selanjutnya?</h2>
    <p class="text-lg mb-6">Mari bergabung bersama RUMUS BUMI JAYA dan wujudkan impian usahamu!</p>
    <a href="{{ route('kontak.index') }}"
        class="bg-white text-orange-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">
        Hubungi Kami
    </a>
</section>
@endsection
