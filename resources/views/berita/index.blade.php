@extends('layouts.app')

@section('title', 'Berita dan Artikel RUMUS')

@section('content')
<section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
        {{-- Dekorasi Lingkaran --}}
        <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-20 rounded-full"></div>

        {{-- Konten Judul --}}
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl font-bold mb-3 drop-shadow-md">Berita dan Artikel RUMUS</h1>
            <p class="text-sm text-white/90">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
                <a href="#" class="hover:underline">Galreri & Berita</a> >
                <span class="font-semibold">Berita RUMUS</span>
            </p>
            <p class="mt-2 text-lg opacity-90"> Temukan informasi terkini seputar kegiatan dan pengembangan UMKM di Desa Bumi Jaya</p>
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
