@extends('layouts.app')

@section('title', 'Beranda - RUMUS BUMI JAYA')

@section('content')

<section class="relative h-[600px] md:h-[580px] overflow-hidden">
    <img src="{{ asset('image/banner.jpg') }}"
            alt="Banner"
            class="w-full h-full object-cover object-center">
    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4x1">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-shadow-orange-400">Sukses Bersama Rumah Usaha</h1>
            <p class="text-xl md:text-2xl">Dari Desa, untuk Indonesia. Mewujudkan UMKM Desa yang Mandiri dan Berdaya Saing.</p>
        </div>
    </div>
</section>

<!-- Kegiatan -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 orange-text">Kegiatan Terkini</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($kegiatans as $item)
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
            <a href="{{ route('kegiatan.index') }}" class="inline-block text-right bg-orange-primary text-orange-600 px-6 py-3 rounded-lg hover:bg-orange-secondary transition duration-300">
                Lihat Semua
            </a>
        </div>
    </div>
</section>

        {{-- produk unggulan --}}
        <section class="py-16 bg-[#FFE7D1]">
            <div class="container mx-auto px-4">
            <div class="flex justify-center text-center mb-12">
                <h2 class="text-3xl text-center font-bold orange-text">Produk Unggulan</h2>
            </div>

        <!-- Swiper -->
        <div class="swiper mySwiper px-6 flex justify-center">
            <div class="swiper-wrapper flex justify-center items-center">
                    <div class="container mx-auto px-6 flex justify-center">
                        @if ($produks->count() > 0)
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
                                @foreach ($produks as $item)
                                    @php
                                        $cover = $item->gambar->where('is_cover', true)->first();
                                        $gambarUrl = $cover
                                            ? asset('storage/' . $cover->path_gambar)
                                            : ($item->gambar->first()
                                                ? asset('storage/' . $item->gambar->first()->path_gambar)
                                                : asset('images/placeholder/produk.jpg'));
                                    @endphp
                                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden">
                                        <img src="{{ $gambarUrl }}" alt="{{ $item->nama_produk }}" class="w-full h-48 object-cover">

                                        <div class="p-5">
                                            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                                {{ $item->nama_produk }}
                                            </h3>

                                            <p class="text-gray-600 text-sm mb-3">
                                                {{ Str::limit($item->deskripsi_singkat, 80) }}
                                            </p>

                                            <p class="text-orange-600 font-bold text-base mb-3">
                                                Rp. {{ number_format($item->harga, 0, ',', '.') }}
                                            </p>
                                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">
                                                {{ $item->kategori->nama_kategori ?? $item->kategori->nama ?? 'Tanpa Kategori' }}
                                            </span>
                                            <div class="mt-4">
                                                <a href="{{ route('produk.show', $item->id_produk) }}"
                                                class="text-sm text-orange-600 hover:underline font-semibold">
                                                Lihat Detail...
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-12">
                                {{ $produks->links() }}
                            </div>
                                @else
                            <div class="text-center text-gray-500 py-16">
                                <p>Belum ada produk yang ditambahkan.</p>
                            </div>
                        @endif
                    </div>
            </div>

            <!-- Navigasi -->
            <div class="swiper-button-prev text-white"></div>
            <div class="swiper-button-next text-white"></div>
        </div>

        <div class="text-center mx-auto mt-8">
            <a href="{{ route('produk.index') }}" class="text-orange-primary hover:text-orange-secondary text-bold font-semibold">
                Lihat Semua <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>

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
