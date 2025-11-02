@extends('layouts.app')

@section('title', 'Produk Unggulan RUMUS')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold orange-text">Produk Unggulan</h1>
        <p class="text-gray-600 mt-2">Temukan berbagai produk unggulan dari UMKM Desa Bumi Jaya</p>
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
                <div class="mt-3">
                    <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">{{ $item->kategori }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $produk->links() }}
    </div>
</div>
@endsection
