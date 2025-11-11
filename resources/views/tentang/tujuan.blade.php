@extends('layouts.app')

@section('title', 'Tujuan & Manfaat - RUMUS BUMI JAYA')

@section('content')
 <section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
        {{-- Dekorasi Lingkaran --}}
        <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-20 rounded-full"></div>

        {{-- Konten Judul --}}
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl font-bold mb-3 drop-shadow-md">Tujuan & Manfaat</h1>
            <p class="text-sm text-white/90">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
                <a href="#" class="hover:underline">Tentang Kami</a> >
                <span class="font-semibold">Tujuan & Manfaat</span>
            </p>
        </div>
    </section>
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
            <h2 class="text-2xl text-center font-bold mb-6 orange-text">Tujuan</h2>

            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Meningkatkan Kualitas Produk</h3>
                            <p class="text-gray-700">Meningkatkan kualitas dan standarisasi produk UMKM agar dapat bersaing di pasar yang lebih luas.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Meningkatkan Omset</h3>
                            <p class="text-gray-700">Meningkatkan omset dan keuntungan para pelaku UMKM melalui akses pasar yang lebih luas.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Menciptakan Lapangan Kerja</h3>
                            <p class="text-gray-700">Menciptakan lapangan kerja baru dan mengurangi angka pengangguran di Desa Bumi Jaya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-2xl text-center font-bold mb-6 orange-text">Manfaat</h2>

            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Bagi Pelaku UMKM</h3>
                            <p class="text-gray-700">Meningkatkan kapasitas usaha, akses pasar, dan pendapatan para pelaku UMKM.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-city"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Bagi Masyarakat</h3>
                            <p class="text-gray-700">Meningkatkan kesejahteraan masyarakat Desa Bumi Jaya secara keseluruhan.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-start">
                        <div class="shrink-0 w-10 h-10 bg-orange-primary rounded-full flex items-center justify-center text-white mr-4">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Bagi Pemerintah</h3>
                            <p class="text-gray-700">Mendukung program pemerintah dalam pengembangan UMKM dan pemberdayaan masyarakat desa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
