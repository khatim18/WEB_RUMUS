@extends('layouts.app')

@section('title', 'Galeri Kegiatan RUMUS')

@section('content')

<section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
    <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
    <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-25 rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3 drop-shadow-lg">Galeri Kegiatan RUMUS</h1>
        <p class="text-sm text-white/90">
            <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
            <a href="#" class="hover:underline">Galeri & Berita</a> >
            <span class="font-semibold">Galeri Kegiatan RUMUS</span>
        </p>
        <p class="mt-3 text-lg md:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
            Dokumentasi Kegiatan dan Prestasi RUMUS Desa Bumi Jaya Menginspirasi, Mengembangkan, dan Mengedukasi Masyarakat Desa.
        </p>
    </div>
</section>
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($kegiatan as $item)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/kegiatan.jpg') }}"
                 alt="{{ $item->judul }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <div class="flex items-center mb-2">
                    <span class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</span>
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $item->judul }}</h3>
                <p class="text-gray-700 mb-2">{{ $item->lokasi }}</p>
                <p class="text-gray-700">{{ Str::limit($item->deskripsi, 100) }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $kegiatan->links() }}
    </div>
</div>
@endsection
