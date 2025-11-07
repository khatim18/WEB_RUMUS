@extends('layouts.app')

@section('title', 'Berita dan Artikel RUMUS')

@section('content')
<div class="container mx-auto px-4 py-8">
    {{-- HEADER --}}
    <div class="mb-8 text-center">
        <h1 class="text-3xl font-bold text-orange-600">Berita dan Artikel RUMUS</h1>
        <p class="text-gray-600 mt-2">
            Temukan informasi terkini seputar kegiatan dan pengembangan UMKM di Desa Bumi Jaya
        </p>
    </div>

    {{-- GRID BERITA --}}
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
