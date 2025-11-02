@extends('layouts.app')

@section('title', $berita->judul . ' - Berita RUMUS')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('berita.index') }}" class="text-orange-primary hover:text-orange-secondary">
                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Berita
            </a>
        </div>

        <article class="bg-white rounded-lg shadow-md overflow-hidden">
            @if($berita->gambar)
            <img src="{{ asset('storage/'.$berita->gambar) }}"
                 alt="{{ $berita->judul }}" class="w-full h-64 md:h-96 object-cover">
            @endif

            <div class="p-6 md:p-8">
                <div class="flex items-center mb-4">
                    <span class="bg-orange-primary text-white text-xs px-2 py-1 rounded">{{ $berita->tag }}</span>
                    <span class="text-gray-500 text-sm ml-auto">{{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}</span>
                </div>

                <h1 class="text-3xl font-bold mb-4">{{ $berita->judul }}</h1>

                <div class="flex items-center mb-6 text-gray-600">
                    <i class="fas fa-user mr-2"></i>
                    <span>{{ $berita->penulis }}</span>
                </div>

                <div class="prose max-w-none">
                    {!! $berita->konten !!}
                </div>
            </div>
        </article>

        <div class="mt-8">
            <h3 class="text-xl font-semibold mb-4">Berita Terkait</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Related news items would go here -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('images/placeholder/berita.jpg') }}"
                         alt="Berita Terkait" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold mb-2">Judul Berita Terkait</h4>
                        <p class="text-gray-600 text-sm">Deskripsi singkat berita terkait...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
