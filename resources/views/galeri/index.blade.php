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


@endsection
