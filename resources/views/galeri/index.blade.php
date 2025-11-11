@extends('layouts.app')

@section('title', 'Galeri RUMUS')

@section('content')
{{-- Hero Section --}}
<section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
    <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
    <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-25 rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3 drop-shadow-lg">Galeri RUMUS</h1>
        <p class="text-sm text-white/90">
            <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
            <a href="#" class="hover:underline">Galeri & Berita</a> >
            <span class="font-semibold">Galeri RUMUS</span>
        </p>
        <p class="mt-3 text-lg md:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
            Dokumentasi Kegiatan dan Prestasi RUMUS Desa Bumi Jaya Menginspirasi, Mengembangkan, dan Mengedukasi Masyarakat Desa.
        </p>
    </div>
</section>

{{-- Section Galeri --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach ($galeris as $item)
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                            class="w-full h-56 object-cover transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <a href="{{ asset('storage/' . $item->gambar) }}" target="_blank"
                                class="bg-white text-[#F97316] px-4 py-2 rounded-full text-sm font-semibold shadow hover:bg-[#F97316] hover:text-white transition">
                                Lihat Foto
                            </a>
                        </div>
                    </div>

                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2 group-hover:text-[#F97316] transition">
                            {{ $item->judul }}
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                            {{ $item->deskripsi }}
                        </p>
                        <div class="mt-4 text-xs text-gray-500 flex justify-between items-center">
                            <span><i class="fa-regular fa-calendar"></i> {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                            <a href="{{ route('galeri.show', $item) }}"
                                class="text-[#F97316] font-semibold hover:underline">
                                Selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Jika tidak ada data --}}
        @if ($galeris->isEmpty())
            <p class="text-center text-gray-500 mt-8">Belum ada dokumentasi kegiatan untuk saat ini.</p>
        @endif
    </div>
</section>
@endsection
