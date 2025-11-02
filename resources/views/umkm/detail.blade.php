@extends('layouts.app')

@section('title', $umkm->nama . ' - UMKM RUMUS')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('umkm.index') }}" class="text-orange-primary hover:text-orange-secondary">
            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Daftar UMKM
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ $umkm->gambar ? asset('storage/'.$umkm->gambar) : asset('images/placeholder/umkm.jpg') }}"
                     alt="{{ $umkm->nama }}" class="w-full h-64 md:h-96 object-cover">

                <div class="p-6 md:p-8">
                    <h1 class="text-3xl font-bold mb-4">{{ $umkm->nama }}</h1>
                    <p class="text-gray-600 mb-6">Pemilik: {{ $umkm->pemilik }}</p>

                    <div class="prose max-w-none">
                        <h2 class="text-2xl font-semibold mb-4">Tentang UMKM</h2>
                        <p class="mb-4">{{ $umkm->deskripsi }}</p>

                        <h3 class="text-xl font-semibold mb-3">Alamat</h3>
                        <p class="mb-6">{{ $umkm->alamat }}</p>

                        <h3 class="text-xl font-semibold mb-3">Kontak</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <i class="fas fa-phone mr-2 text-orange-primary"></i>
                                <p>{{ $umkm->telepon }}</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope mr-2 text-orange-primary"></i>
                                <p>{{ $umkm->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-4 orange-text">Produk Unggulan</h2>

                    @if($umkm->produk->count() > 0)
                    <div class="space-y-4">
                        @foreach($umkm->produk as $produk)
                        <div class="flex items-center space-x-4">
                            <img src="{{ $produk->gambar ? asset('storage/'.$produk->gambar) : asset('images/placeholder/produk.jpg') }}"
                                 alt="{{ $produk->nama }}" class="w-16 h-16 object-cover rounded-lg">
                            <div>
                                <h3 class="font-semibold">{{ $produk->nama }}</h3>
                                <p class="text-orange-primary font-bold">Rp. {{ number_format($produk->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p class="text-gray-600">Belum ada produk yang terdaftar</p>
                    @endif
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-4 orange-text">Hubungi UMKM</h2>

                    <div class="space-y-3">
                        <a href="tel:{{ $umkm->telepon }}" class="flex items-center justify-center w-full bg-orange-primary text-white py-2 px-4 rounded-lg hover:bg-orange-secondary transition duration-300">
                            <i class="fas fa-phone mr-2"></i>
                            Telepon
                        </a>

                        <a href="mailto:{{ $umkm->email }}" class="flex items-center justify-center w-full bg-gray-200 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-300 transition duration-300">
                            <i class="fas fa-envelope mr-2"></i>
                            Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
