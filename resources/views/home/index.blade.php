@extends('layouts.app')

@section('title', 'Beranda - RUMUS BUMI JAYA')

@section('content')

<section class="relative h-[600px] md:h-[580px] overflow-hidden">
    <img src="{{ asset('image/banner.jpg') }}"
            alt="Banner"
            class="w-full h-full object-cover object-center">
    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4x1">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Sukses Bersama Rumah Usaha</h1>
            <p class="text-xl md:text-2xl">Dari Desa, untuk Indonesia. Mewujudkan UMKM Desa yang Mandiri dan Berdaya Saing.</p>
        </div>
    </div>
</section>

<!-- Kegiatan Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 orange-text">Kegiatan Terkini</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($kegiatan as $item)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/kegiatan.jpg') }}"
                     alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $item->judul }}</h3>
                    <p class="text-gray-600 mb-2">{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</p>
                    <p class="text-gray-700">{{ Str::limit($item->deskripsi, 100) }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-8">
            <a href="{{ route('kegiatan.index') }}" class="inline-block bg-orange-primary text-white px-6 py-3 rounded-lg hover:bg-orange-secondary transition duration-300">
                Lihat Semua
            </a>
        </div>
    </div>
</section>

<!-- Produk Unggulan Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold orange-text">Produk Unggulan</h2>
            <a href="{{ route('produk.index') }}" class="text-orange-primary hover:text-orange-secondary font-semibold">
                Lihat Semua <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($produk as $item)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/produk.jpg') }}"
                     alt="{{ $item->nama }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $item->nama }}</h3>
                    <p class="text-gray-700 mb-2">{{ Str::limit($item->deskripsi, 50) }}</p>
                    <p class="text-orange-primary font-bold">Rp. {{ number_format($item->harga, 0, ',', '.') }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Video Profil Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 orange-text">Video Profil</h2>
        <div class="max-w-4xl mx-auto">
            <div class="relative pb-[56.25%] h-0 overflow-hidden rounded-lg shadow-lg">
                <iframe
                    src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                    title="Video Profil RUMUS BUMI JAYA"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    class="absolute top-0 left-0 w-full h-full">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- Berita Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 orange-text">Berita Terkini</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($berita as $item)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/berita.jpg') }}"
                     alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="bg-orange-primary text-white text-xs px-2 py-1 rounded">{{ $item->tag }}</span>
                        <span class="text-gray-500 text-sm ml-auto">{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ $item->judul }}</h3>
                    <p class="text-gray-700 mb-4">{{ Str::limit($item->konten, 100) }}</p>
                    <a href="{{ route('berita.show', $item->slug) }}" class="text-orange-primary hover:text-orange-secondary font-semibold">
                        Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- UMKM Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 orange-text">Kisah Sukses UMKM</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($umkm as $item)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/umkm.jpg') }}"
                     alt="{{ $item->nama }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $item->nama }}</h3>
                    <p class="text-gray-600 mb-2">{{ $item->pemilik }}</p>
                    <p class="text-gray-700">{{ Str::limit($item->deskripsi, 100) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
