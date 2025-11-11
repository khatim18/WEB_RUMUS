@extends('layouts.app')

@section('title', 'Daftar Anggota UMKM - RUMUS BUMI JAYA')

@section('content')
 <section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
        {{-- Dekorasi Lingkaran --}}
        <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-20 rounded-full"></div>

        {{-- Konten Judul --}}
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl font-bold mb-3 drop-shadow-md">DAFTAR ANGGOTA UMKM</h1>
            <p class="text-sm text-white/90">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
                <a href="#" class="hover:underline">Tentang Kami</a> >
                <span class="font-semibold">DAFTAR ANGGOTA UMKM</span>
            </p>
        </div>
    </section>
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
        <div class="p-6 md:p-8">
            <div class="text-center mb-6">
                <p class="text-gray-600 mt-2">Daftar Anggota UMKM yang bergabung dalam program RUMUS BUMI JAYA</p>
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
