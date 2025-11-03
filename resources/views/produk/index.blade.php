@extends('layouts.app')

@section('title', 'Produk Unggulan RUMUS')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8 text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-orange-600">Produk Unggulan</h1>
        <p class="text-gray-600 mt-2">Temukan berbagai produk unggulan dari UMKM Desa Bumi Jaya</p>
    </div>

    @if($produk->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($produk as $item)
            @php
    $cover = $item->gambar->where('is_cover', true)->first();

    // Karena path di DB = produk/..., kita butuh "storage/" di depan
    $gambarUrl = $cover 
        ? asset('storage/' . $cover->path_gambar)
        : ($item->gambar->first()
            ? asset('storage/' . $item->gambar->first()->path_gambar)
            : asset('images/placeholder/produk.jpg'));
@endphp


            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <img src="{{ $gambarUrl }}" 
                     alt="{{ $item->nama_produk }}" 
                     class="w-full h-48 object-cover">

                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">
                        {{ $item->nama_produk }}
                    </h3>

                    <p class="text-gray-600 mb-3 text-sm">
                        {{ Str::limit($item->deskripsi_singkat, 60) }}
                    </p>

                    <p class="text-orange-600 font-bold mb-3">
                        Rp. {{ number_format($item->harga, 0, ',', '.') }}
                    </p>

                    <div>
                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded-full">
                            {{ $item->kategori->nama_kategori ?? $item->kategori->nama ?? 'Tanpa Kategori' }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-10">
        {{ $produk->links() }}
    </div>
    @else
        <div class="text-center text-gray-500 py-10">
            <p>Belum ada produk yang ditambahkan.</p>
        </div>
    @endif
</div>
@endsection
