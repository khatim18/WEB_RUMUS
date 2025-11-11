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
            <p class="ml-3 text-sm mr-1"> {!! $item->isi_berita !!} </p>
        </div>

        {{-- Isi konten --}}
        <div class="mt-6 text-gray-700 leading-relaxed prose max-w-none">
            {!! nl2br(e($item->konten)) !!}
        </div>

        {{-- Garis pembatas --}}
        <hr class="my-10 border-gray-300">

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
