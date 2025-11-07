@extends('layouts.app')

@section('title', $item->judul)

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        {{-- Gambar utama --}}
        <div class="overflow-hidden rounded-lg shadow-md">
            <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('images/placeholder/berita.jpg') }}"
                 alt="{{ $item->judul }}" class="w-full h-80 object-cover">
        </div>

        {{-- Judul & info --}}
        <div class="mt-6">
            <h1 class="text-3xl font-bold text-gray-800">{{ $item->judul }}</h1>

            <div class="flex items-center text-sm text-gray-500 mt-2">
                <span class="bg-orange-primary text-white px-2 py-1 rounded text-xs">{{ $item->tag }}</span>
                <span class="ml-3"><i class="fas fa-calendar-alt mr-1"></i> {{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</span>
                <span class="ml-3"><i class="fas fa-user mr-1"></i> {{ $item->penulis ?? 'Admin' }}</span>
            </div>
        </div>

        {{-- Isi konten --}}
        <div class="mt-6 text-gray-700 leading-relaxed prose max-w-none">
            {!! nl2br(e($item->konten)) !!}
        </div>

        {{-- Garis pembatas --}}
        <hr class="my-10 border-gray-300">

        {{-- Berita Lainnya --}}
        <div>
            <h2 class="text-2xl font-semibold text-orange-primary mb-4">Berita Lainnya</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($beritaLainnya as $berita)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="{{ $berita->gambar ? asset('storage/'.$berita->gambar) : asset('images/placeholder/berita.jpg') }}"
                         alt="{{ $berita->judul }}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">
                            {{ Str::limit($berita->judul, 60) }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-3">
                            {{ Str::limit(strip_tags($berita->konten), 80) }}
                        </p>
                        <a href="{{ route('berita.show', $berita->slug) }}"
                           class="text-orange-primary hover:text-orange-secondary font-semibold text-sm">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Tombol kembali --}}
        <div class="mt-8 text-center">
            <a href="{{ route('berita.index') }}"
               class="inline-flex items-center bg-orange-primary text-white px-4 py-2 rounded-md hover:bg-orange-secondary transition">
                <i class="fas fa-arrow-left mr-2"></i> Kembali ke Berita
            </a>
        </div>
    </div>
</div>
@endsection
