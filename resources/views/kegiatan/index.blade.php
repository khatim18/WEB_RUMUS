@extends('layouts.app')

@section('title', 'Galeri Kegiatan RUMUS')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900">
                        Beranda
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="#" class="text-gray-700 hover:text-gray-900">Galeri & Berita</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="text-orange-primary">Kegiatan RUMUS</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="text-3xl font-bold orange-text mt-4">Galeri Kegiatan RUMUS</h1>
        <p class="text-gray-600 mt-2">Dokumentasi kegiatan yang telah dilaksanakan oleh RUMUS BUMI JAYA</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($kegiatan as $item)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/kegiatan.jpg') }}"
                 alt="{{ $item->judul }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <div class="flex items-center mb-2">
                    <span class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</span>
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $item->judul }}</h3>
                <p class="text-gray-700 mb-2">{{ $item->lokasi }}</p>
                <p class="text-gray-700">{{ Str::limit($item->deskripsi, 100) }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $kegiatan->links() }}
    </div>
</div>
@endsection
