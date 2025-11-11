@extends('layouts.app')

@section('title', $item->judul)

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
        {{-- Gambar Utama --}}
        <img
            src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('images/placeholder/berita.jpg') }}"
            alt="{{ $item->judul }}"
            class="w-full h-[420px] object-cover"
        >

        {{-- Konten Utama --}}
        <div class="p-8">
            {{-- Tag & Meta Info --}}
            <div class="flex flex-wrap items-center text-sm text-gray-500 mb-3">
                @if($item->tag)
                    <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-semibold mr-3">
                        {{ $item->tag }}
                    </span>
                @endif
                <div class="flex items-center mr-4">
                    <i class="fas fa-calendar-alt mr-1 text-orange-500"></i>
                    <span>{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-user mr-1 text-orange-500"></i>
                    <span>{{ $item->penulis ?? 'Admin RUMUS' }}</span>
                </div>
            </div>

            {{-- Judul --}}
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight mb-6">
                {{ $item->judul }}
            </h1>

            {{-- Isi Berita --}}
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                {!! $item->isi_berita !!}
            </div>

            {{-- Konten tambahan jika ada --}}
            @if(!empty($item->konten))
                <div class="mt-8 prose prose-lg text-gray-700">
                    {!! nl2br(e($item->konten)) !!}
                </div>
            @endif

            {{-- Garis Pembatas --}}
            <hr class="my-10 border-gray-300">

            {{-- Tombol Kembali --}}
            <div class="text-center">
                <a href="{{ route('berita.index') }}"
                    class="inline-flex items-center bg-orange-500 hover:bg-orange-600 text-white px-5 py-2.5 rounded-full transition-all shadow-sm hover:shadow-md">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Daftar Berita
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
