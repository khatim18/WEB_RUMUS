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
            <div class="text-center mb-6">
                <p class="text-white mt-2">Daftar Anggota UMKM yang bergabung dalam program RUMUS BUMI JAYA</p>
            </div>
        </div>
    </section>
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
        <p class="mx-6 py-4 mt-2 font-bold text-lg font-sans text-center text-gray-600">Total Anggota {{ $totalUmkm }}
            UMKM</p>
        <div class="p-6 md:p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($umkm as $item)
                    <x-card-daftar-anggota
                        :foto="$item->foto_anggota"
                        :nama="$item->nama"
                        :nama-umkm="$item->nama_umkm"
                        :kategori="$item->kategori_usaha"
                        :no-hp="$item->no_hp"
                        />
                @endforeach
            </div>
            <div class="mt-8">{{ $umkm->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
