@extends('layouts.app')

@section('title', $galeri->judul . ' - Galeri RUMUS')

@section('content')
{{-- Hero Section --}}
<section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
    <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
    <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-25 rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3 drop-shadow-lg">{{ $galeri->judul }}</h1>
        <p class="text-sm text-white/90">
            <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
            <a href="{{ route('galeri.index') }}" class="hover:underline">Galeri RUMUS</a> >
            <span class="font-semibold">{{ $galeri->judul }}</span>
        </p>
    </div>
</section>

{{-- Detail Galeri --}}
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}"
                class="w-full h-[450px] object-cover">

            <div class="p-8">
                <div class="flex items-center text-gray-500 text-sm mb-4">
                    <i class="fa-regular fa-calendar mr-2"></i>
                    <span>{{ \Carbon\Carbon::parse($galeri->tanggal)->format('d M Y') }}</span>
                </div>

                <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $galeri->judul }}</h2>

                <p class="text-gray-700 leading-relaxed text-lg">
                    {{ $galeri->deskripsi }}
                </p>

                <div class="mt-10">
                    <a href="{{ route('galeri.index') }}"
                        class="inline-flex items-center bg-[#F97316] hover:bg-[#ea580c] text-white font-semibold px-5 py-2 rounded-full transition">
                        ← Kembali ke Galeri
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
