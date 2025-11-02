@extends('layouts.app')

@section('title', 'Galeri RUMUS')

@section('content')
<!-- Hero Section -->
<section class="relative h-60 bg-linear-to-r from-orange-500 to-orange-400 text-white flex flex-col justify-center items-center">
    <h1 class="text-3xl md:text-4xl font-bold">Galeri RUMUS</h1>
    <p class="mt-2 text-lg opacity-90">Dokumentasi Kegiatan dan Prestasi RUMUS Desa Bumi Jaya</p>
</section>

<!-- Breadcrumb -->
<div class="bg-gray-50 py-3 text-sm px-6">
    <div class="container mx-auto text-gray-700">
        <a href="{{ route('home') }}" class="hover:text-orange-500">Beranda</a> /
        <a href="{{ route('berita.index') }}" class="hover:text-orange-500">Galeri & Berita</a> /
        <span class="font-semibold text-gray-900">Galeri RUMUS</span>
    </div>
</div>

<!-- Content -->
<section class="py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Galeri Kegiatan RUMUS</h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($galeris as $item)
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <img src="{{ asset('image/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-52 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $item->judul }}</h3>
                        <p class="text-gray-600 text-sm">{{ $item->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-orange-600 text-white py-10 mt-12">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-6">
        <div>
            <h3 class="font-bold text-lg mb-2">RUMUS Desa Bumi Jaya</h3>
            <p class="text-sm opacity-90">RUMUS (Rumah Usaha) adalah wadah UMKM di Desa Bumi Jaya untuk meningkatkan ekonomi masyarakat.</p>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-2">Hubungi Kami</h3>
            <p><i class="fas fa-phone mr-2"></i>Desabumijaya@rumus.id</p>
            <p><i class="fas fa-map-marker-alt mr-2"></i>Desa Bumi Jaya, Serang</p>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-2">Jelajahi</h3>
            <ul class="text-sm space-y-1">
                <li><a href="#" class="hover:underline">Website Resmi Desa</a></li>
                <li><a href="#" class="hover:underline">Shopee RUMUS</a></li>
                <li><a href="#" class="hover:underline">Tokopedia RUMUS</a></li>
                <li><a href="#" class="hover:underline">Tiktok Shop RUMUS</a></li>
            </ul>
        </div>
    </div>
    <div class="text-center text-sm opacity-90 mt-8">© 2025 RUMUS Desa Bumi Jaya</div>
</footer>
@endsection
