@extends('layouts.app')

@section('title', 'Galeri RUMUS')

@section('content')
 <section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
        {{-- Dekorasi Lingkaran --}}
        <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-20 rounded-full"></div>

        {{-- Konten Judul --}}
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl font-bold mb-3 drop-shadow-md">Galeri RUMUS</h1>
            <p class="text-sm text-white/90">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
                <a href="#" class="hover:underline">Galreri & Berita</a> >
                <span class="font-semibold">Galeri RUMUS</span>
            </p>
            <p class="mt-2 text-lg opacity-90">Dokumentasi Kegiatan dan Prestasi RUMUS Desa Bumi Jaya</p>
        </div>
    </section>

<!-- Content -->
<section class="py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl text-center font-semibold text-gray-800 mb-6">Galeri Kegiatan RUMUS</h2>

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
