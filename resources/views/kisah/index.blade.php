@extends('layouts.app')

@section('title', 'Kisah Sukses - RUMUS BUMI JAYA')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-[#F97316] via-[#fb923c] to-[#FDBA74] text-white py-24 overflow-hidden z-0">
    <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full blur-2xl"></div>
    <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-25 rounded-full blur-2xl"></div>

    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3 drop-shadow-lg tracking-tight">Galeri RUMUS</h1>
        <p class="text-sm text-white/90">
            <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
            <a href="#" class="hover:underline">Galeri & Berita</a> >
            <span class="font-semibold">Galeri RUMUS</span>
        </p>
        <p class="mt-4 text-lg md:text-xl text-white/90 max-w-2xl mx-auto leading-relaxed">
            Dokumentasi kegiatan dan prestasi RUMUS Desa Bumi Jaya yang menginspirasi, mengembangkan, dan mengedukasi masyarakat desa.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="container mx-auto px-6 py-20">
    <h2 class="text-3xl md:text-4xl font-bold text-orange-600 mb-12 text-center">Cerita Perubahan Nyata</h2>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
            <img src="{{ asset('image/kisah1.jpg') }}" alt="Kisah 1" class="w-full h-56 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Siti Rahma - Pengrajin Anyaman</h3>
                <p class="text-gray-600 mb-4">
                    Dari usaha rumahan kecil, kini produknya menembus pasar nasional berkat pelatihan dan pendampingan RUMUS.
                </p>
                <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 hover:underline">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
            <img src="{{ asset('image/kisah2.jpg') }}" alt="Kisah 2" class="w-full h-56 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Budi Santoso - Kopi Nusantara</h3>
                <p class="text-gray-600 mb-4">
                    Dengan inovasi kemasan dan branding, kopi lokal Bumi Jaya kini hadir di beberapa kafe ternama.
                </p>
                <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 hover:underline">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
            <img src="{{ asset('image/kisah3.jpg') }}" alt="Kisah 3" class="w-full h-56 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Nuraini - Olahan Pisang</h3>
                <p class="text-gray-600 mb-4">
                    Memanfaatkan hasil kebun desa, Nuraini sukses mengembangkan usaha olahan pisang khas Bumi Jaya.
                </p>
                <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 hover:underline">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-orange-500 to-orange-600 py-20 text-center text-white">
    <h2 class="text-3xl md:text-4xl font-bold mb-4">Ingin Kisahmu Jadi Inspirasi Selanjutnya?</h2>
    <p class="text-lg mb-8 text-white/90">Mari bergabung bersama RUMUS BUMI JAYA dan wujudkan impian usahamu!</p>
    <a href="{{ route('kontak.index') }}"
        class="bg-white text-orange-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">
        Hubungi Kami
    </a>
</section>
@endsection
