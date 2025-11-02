@extends('layouts.app')

@section('title', 'Daftar Anggota UMKM - RUMUS BUMI JAYA')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold orange-text">Daftar Anggota UMKM</h1>
        <p class="text-gray-600 mt-2">Daftar UMKM yang bergabung dalam program RUMUS BUMI JAYA</p>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
        <div class="p-6 md:p-8">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-semibold mb-2">DAFTAR ANGGOTA UMKM</h2>
                <p class="text-gray-600">Total anggota: {{ $umkm->total() }} UMKM</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($umkm as $item)
                <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-md transition duration-300">
                    <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/umkm.jpg') }}"
                         alt="{{ $item->nama }}" class="w-full h-32 object-cover rounded-lg mb-3">
                    <h3 class="font-semibold">{{ $item->nama }}</h3>
                    <p class="text-gray-600 text-sm">{{ $item->pemilik }}</p>
                </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $umkm->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
