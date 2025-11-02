@extends('layouts.app')

@section('title', 'Berita dan Artikel RUMUS')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold orange-text">Berita dan Artikel RUMUS</h1>
        <p class="text-gray-600 mt-2">Temukan informasi terkini seputar kegiatan dan pengembangan UMKM di Desa Bumi Jaya</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($berita as $item)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/berita.jpg') }}"
                 alt="{{ $item->judul }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <div class="flex items-center mb-2">
                    <span class="bg-orange-primary text-white text-xs px-2 py-1 rounded">{{ $item->tag }}</span>
                    <span class="text-gray-500 text-sm ml-auto">{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</span>
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $item->judul }}</h3>
                <p class="text-gray-700 mb-4">{{ Str::limit($item->konten, 100) }}</p>
                <a href="{{ route('berita.show', $item->slug) }}" class="text-orange-primary hover:text-orange-secondary font-semibold">
                    Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $berita->links() }}
    </div>
</div>
@endsection
