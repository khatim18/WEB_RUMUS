@extends('layouts.app')

@section('title', 'Produk Unggulan - RUMUS Bumi Jaya')

@section('content')
    {{-- HEADER SECTION --}}
    <section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
        <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-20 rounded-full"></div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl font-bold mb-3 drop-shadow-md">Produk Unggulan</h1>
            <p class="text-sm text-white/90">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
                <span class="font-semibold">Produk Unggulan</span>
            </p>
        </div>
    </section>
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            @if ($produk->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach ($produk as $item)
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
                    {{ $produk->links() }}
                </div>
            @else
                <div class="text-center text-gray-500 py-16">
                    <p>Belum ada produk yang ditambahkan.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
