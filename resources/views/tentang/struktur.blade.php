@extends('layouts.app')

@section('title', 'Struktur Organisasi - RUMUS BUMI JAYA')

@section('content')
<section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
        {{-- Dekorasi Lingkaran --}}
        <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-20 rounded-full"></div>

        {{-- Konten Judul --}}
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl font-bold mb-3 drop-shadow-md">STRUKTUR ORGANISASI</h1>
            <p class="text-sm text-white/90">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
                <a href="#" class="hover:underline">Tentang Kami</a> >
                <span class="font-semibold">STRUKTUR ORGANISASI</span>
            </p>
            <p class="mx-auto mt-2 text-sm text-white/90">Periode 2023-2025</p>
        </div>
    </section>>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6 md:p-8">
            <div class="text-center mb-8">
                <img src="{{ asset('images/placeholder/struktur.jpg') }}"
                        alt="Struktur Organisasi"
                        class="w-full max-w-4xl mx-auto">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold mb-2 orange-text">Ketua</h3>
                    <p class="text-gray-700">Imam Wahyudi</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold mb-2 orange-text">Sekretaris</h3>
                    <p class="text-gray-700">Siti Nurhaliza, S.Pd.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold mb-2 orange-text">Bendahara</h3>
                    <p class="text-gray-700">Ahmad Fauzi, S.Kom.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold mb-2 orange-text">Koordinator Pelatihan</h3>
                    <p class="text-gray-700">Dewi Lestari, S.P.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold mb-2 orange-text">Koordinator Pemasaran</h3>
                    <p class="text-gray-700">Rudi Hermawan, S.E.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold mb-2 orange-text">Koordinator Produksi</h3>
                    <p class="text-gray-700">Indah Permata Sari, S.T.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
