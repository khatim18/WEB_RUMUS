@extends('layouts.app')

@section('title', 'Kisah Sukses | RUMUS Bumi Jaya')

@section('content')
    <!-- Header Section -->
    <div class="relative bg-linear-to-r from-orange-500 to-orange-400 text-white text-center py-12">
        <h1 class="text-3xl md:text-4xl font-bold">Kisah Sukses</h1>
        <p class="text-sm mt-2">Beranda > Galeri & Berita > Kisah Sukses</p>
    </div>

    <!-- Content Section -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-3 gap-8">
            @forelse ($kisahs as $kisah)
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden">
                    @if($kisah->gambar)
                        <img src="{{ asset('storage/' . $kisah->gambar) }}" alt="{{ $kisah->judul }}" class="w-full h-56 object-cover">
                    @else
                        <div class="w-full h-56 bg-gray-200 flex items-center justify-center text-gray-500">
                            <span>Foto Tidak Tersedia</span>
                        </div>
                    @endif
                    <div class="p-5">
                        <h2 class="font-bold text-lg text-gray-800 mb-2">{{ $kisah->judul }}</h2>
                        <p class="text-gray-600 text-sm line-clamp-3">{{ Str::limit(strip_tags($kisah->deskripsi), 120) }}</p>
                        <a href="{{ route('kisah.show', $kisah->id) }}" class="inline-block mt-4 text-orange-600 hover:underline font-medium">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-10">
                    <p class="text-gray-500 text-lg">Belum ada kisah sukses yang ditambahkan.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-10">
            {{ $kisahs->links() }}
        </div>
    </div>
@endsection
