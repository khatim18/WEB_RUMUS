@extends('layouts.app')

@section('title', 'UMKM - RUMUS BUMI JAYA')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold orange-text">UMKM Desa Bumi Jaya</h1>
        <p class="text-gray-600 mt-2">Temukan berbagai UMKM unggulan dari Desa Bumi Jaya</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($umkm as $item)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/umkm.jpg') }}"
                 alt="{{ $item->nama }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">{{ $item->nama }}</h3>
                <p class="text-gray-600 mb-2">{{ $item->pemilik }}</p>
                <p class="text-gray-700 mb-4">{{ Str::limit($item->deskripsi, 100) }}</p>
                <a href="{{ route('umkm.detail', $item->id) }}" class="text-orange-primary hover:text-orange-secondary font-semibold">
                    Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $umkm->links() }}
    </div>
</div>
@endsection
