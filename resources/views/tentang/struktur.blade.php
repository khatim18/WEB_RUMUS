@extends('layouts.app')

@section('title', 'Struktur Organisasi - RUMUS BUMI JAYA')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold orange-text">Struktur Organisasi</h1>
        <p class="text-gray-600 mt-2">Struktur organisasi RUMUS BUMI JAYA</p>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6 md:p-8">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-semibold mb-2">STRUKTUR ORGANISASI</h2>
                <p class="text-gray-600">Periode 2023-2025</p>
            </div>

            <div class="text-center mb-8">
                <img src="{{ asset('images/placeholder/struktur.jpg') }}" alt="Struktur Organisasi" class="w-full max-w-4xl mx-auto">
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
