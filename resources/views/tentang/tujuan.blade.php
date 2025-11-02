@extends('layouts.app')

@section('title', 'Tujuan & Manfaat - RUMUS BUMI JAYA')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold orange-text">Tujuan & Manfaat</h1>
        <p class="text-gray-600 mt-2">Tujuan dan manfaat program RUMUS BUMI JAYA</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
            <h2 class="text-2xl font-semibold mb-6 orange-text">Tujuan</h2>

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
            <h2 class="text-2xl font-semibold mb-6 orange-text">Manfaat</h2>

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
