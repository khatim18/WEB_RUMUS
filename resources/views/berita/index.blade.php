@extends('layouts.app')

@section('title', 'Berita dan Artikel RUMUS')

@section('content')
<section class="relative bg-gradient-to-r from-orange-500 to-orange-400 text-white py-24 overflow-hidden">
    {{-- Dekorasi Lingkaran --}}
    <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-25 rounded-full"></div>

    {{-- Konten Judul --}}
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow-lg tracking-tight">
            Berita dan Artikel <span class="text-yellow-100">RUMUS</span>
        </h1>

        {{-- Breadcrumb --}}
        <p class="text-sm text-white/90 mb-3">
            <a href="{{ url('/') }}" class="hover:underline hover:text-yellow-100 transition">Beranda</a>
            <span class="mx-1">›</span>
            <a href="#" class="hover:underline hover:text-yellow-100 transition">Galeri & Berita</a>
            <span class="mx-1">›</span>
            <span class="font-semibold text-yellow-100">Berita</span>
        </p>

        {{-- Deskripsi --}}
        <p class="mt-2 text-lg md:text-xl text-white/90 max-w-2xl mx-auto leading-relaxed">
            Temukan informasi terbaru seputar kegiatan, pelatihan, dan pengembangan UMKM di Desa Bumi Jaya.
        </p>
    </div>
</section>

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($berita as $item)
            <x-card-berita
                :gambar="$item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/berita.jpg')"
                :judul="$item->judul"
                :deskripsi="$item->deskripsi_singkat"
                :tag="$item->jenis"
                :penulis="$item->penulis"
                :tanggal="$item->tanggal"
                :slug="$item->slug"
            />
        @empty
            <div class="col-span-full text-center text-gray-500 py-16">
                Belum ada berita yang dipublikasikan.
            </div>
        @endforelse

    </div>
    <div class="mt-8">
        {{ $berita->links() }}
    </div>
</div>
@endsection
