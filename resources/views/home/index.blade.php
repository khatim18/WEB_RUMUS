@extends('layouts.app')

@section('title', 'Beranda - RUMUS BUMI JAYA')

@section('content')

<section class="relative h-[600px] md:h-[580px] flex item-center justify-center overflow-hidden">
    <img src="{{ asset('image/banner.jpg') }}"
            alt="Banner"
            class="w-full h-full object-cover object-center">
    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4x1">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-shadow-orange-500 stroke-orange">Sukses Bersama Rumah Usaha</h1>
            <p class="text-xl md:text-2xl font-semibold">Dari Desa, untuk Indonesia. Mewujudkan UMKM Desa yang Mandiri dan Berdaya Saing.</p>
        </div>
    </div>
</section>

<!-- Kegiatan -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 orange-text">Kegiatan Terkini</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($kegiatans as $item)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 justify-items-center">
            @foreach($kegiatans as $item)
                <x-card-kegiatan :item="$item" />
            @endforeach
            </div>
            <div class="text-center mt-10">
            <a href="{{ route('kegiatan.index') }}"
            class="bg-orange-primary text-white px-8 py-3 rounded-xl font-bold text-lg hover:bg-orange-secondary transition">
            Lihat Semua
            </a>
            @endforeach
        </div>
        </div>
    </div>
</section>

{{-- produk unggulan --}}
<section class="py-16 bg-[#FFE7D1]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold orange-text">Produk Unggulan</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 justify-items-center">
            @foreach ($produks as $item)
                @php
                    $cover = $item->gambar->where('is_cover', true)->first();
                    $gambarUrl = $cover
                        ? asset('storage/' . $cover->path_gambar)
                        : ($item->gambar->first()
                            ? asset('storage/' . $item->gambar->first()->path_gambar)
                            : asset('images/placeholder/produk.jpg'));
                @endphp

                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden flex flex-col h-full w-72">
                    <img src="{{ $gambarUrl }}" alt="{{ $item->nama_produk }}" class="w-full h-48 object-cover">

                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1 text-left">
                            {{ $item->nama_produk }}
                        </h3>

                        <span class="text-left bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full self-start mt-2 mb-3">
                            {{ $item->kategori->nama_kategori ?? $item->kategori->nama ?? 'Tanpa Kategori' }}
                        </span>

                        <p class="text left text-gray-600 text-sm mb-3 flex-grow">
                            {{ Str::limit($item->deskripsi_singkat, 80) }}
                        </p>

                        <p class="text-orange-600 font-bold text-base mb-3 text-left">
                            Rp. {{ number_format($item->harga, 0, ',', '.') }}
                        </p>

                        <div class="text-left mt-auto">
                            <a href="{{ route('produk.show', $item->id_produk) }}"
                               class="text-sm text-orange-600 hover:underline font-semibold">
                               Lihat Detail...
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('produk.index') }}" class="text-orange-primary hover:text-orange-secondary font-semibold">
                Lihat Semua <i class="fas fa-arrow-right ml-1"></i>
            </a>
            </div>
        </div>
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
                    src="https://www.youtube.com/embed/okbWprWRB0E?si=xHIctVm7wrpl2Z96?autoplay=1&mute=1"
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

<!-- UMKM Section -->
<section class="mt-16 mx-16 mb-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 orange-text">Kisah Sukses UMKM</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($umkms as $item)
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
