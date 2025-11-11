@extends('layouts.app')

@section('title', 'Apa Itu RUMUS - RUMUS BUMI JAYA')

@section('content')
 <section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
        {{-- Dekorasi Lingkaran --}}
        <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-20 rounded-full"></div>

        {{-- Konten Judul --}}
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl font-bold mb-3 drop-shadow-md">Apa Itu RUMUS</h1>
            <p class="text-sm text-white/90">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
                <a href="#" class="hover:underline">Tentang Kami</a> >
                <span class="font-semibold">Apa Itu RUMUS</span>
            </p>
        </div>
    </section>
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6 md:p-8">
            <div class="mb-6">
                <div class="flex flex-wrap gap-2 mb-6">
                    <button class="px-4 py-2 bg-orange-primary text-white rounded-lg">3 Foto</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Video</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Dokumen</button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <img src="{{ asset('images/placeholder/sejarah1.jpg') }}" alt="Sejarah RUMUS" class="w-full h-48 object-cover rounded-lg">
                    <img src="{{ asset('images/placeholder/sejarah2.jpg') }}" alt="Sejarah RUMUS" class="w-full h-48 object-cover rounded-lg">
                    <img src="{{ asset('images/placeholder/sejarah3.jpg') }}" alt="Sejarah RUMUS" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>

            <div class="prose max-w-none">
                <h2 class="text-2xl font-semibold mb-4">Sejarah Singkat</h2>

                <p class="mb-4">
                    RUMUS (Rumah Usaha) BUMI JAYA didirikan pada tahun 2020 sebagai respons terhadap tantangan yang dihadapi
                    oleh para pelaku UMKM di Desa Bumi Jaya. Pandemi COVID-19 yang melanda Indonesia pada tahun tersebut
                    memberikan dampak yang signifikan terhadap perekonomian masyarakat, terutama para pelaku usaha skala kecil.
                </p>

                <p class="mb-4">
                    Berangkat dari keprihatinan tersebut, sekelompok pemuda dan tokoh masyarakat Desa Bumi Jaya berkumpul
                    untuk mencari solusi yang dapat membantu para pelaku UMKM bertahan dan bahkan berkembang di tengah situasi
                    yang sulit. Mereka sepakat untuk membentuk sebuah wadah yang kemudian diberi nama RUMUS BUMI JAYA.
                </p>

                <h3 class="text-xl font-semibold mb-3">Milestone Perkembangan</h3>

                <div class="space-y-4 mb-6">
                    <div class="flex">
                        <div class="shrink-0 w-12 h-12 bg-orange-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            1
                        </div>
                        <div>
                            <h4 class="font-semibold mb-1">2020 - Pendirian RUMUS BUMI JAYA</h4>
                            <p class="text-gray-700">Pembentukan tim inti dan penyusunan program awal untuk membantu UMKM Desa Bumi Jaya.</p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="shrink-0 w-12 h-12 bg-orange-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            2
                        </div>
                        <div>
                            <h4 class="font-semibold mb-1">2021 - Pelatihan dan Pendampingan</h4>
                            <p class="text-gray-700">Pelaksanaan serangkaian pelatihan dan pendampingan intensif kepada 50 UMKM pertama.</p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="shrink-0 w-12 h-12 bg-orange-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            3
                        </div>
                        <div>
                            <h4 class="font-semibold mb-1">2022 - Ekspansi Pasar</h4>
                            <p class="text-gray-700">Pembukaan akses pasar baru melalui platform digital dan kerjasama dengan berbagai pihak.</p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="shrink-0 w-12 h-12 bg-orange-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            4
                        </div>
                        <div>
                            <h4 class="font-semibold mb-1">2023 - Penghargaan dan Pengakuan</h4>
                            <p class="text-gray-700">Menerima penghargaan sebagai program pemberdayaan UMKM terbaik tingkat kabupaten.</p>
                        </div>
                    </div>
                </div>

                <h3 class="text-xl font-semibold mb-3">Nilai-Nilai Dasar</h3>

                <p class="mb-4">
                    Dalam perjalannya, RUMUS BUMI JAYA senantiasa berpegang pada nilai-nilai dasar yang menjadi fondasi
                    dari setiap program yang dijalankan:
                </p>

                <ul class="list-disc pl-6 mb-6">
                    <li class="mb-2"><strong>Kolaborasi:</strong> Memperkuat sinergi antar pelaku UMKM dan dengan pihak eksternal.</li>
                    <li class="mb-2"><strong>Inovasi:</strong> Mendorong kreativitas dan inovasi dalam pengembangan produk dan pemasaran.</li>
                    <li class="mb-2"><strong>Keberlanjutan:</strong> Memastikan program yang dijalankan memberikan dampak jangka panjang.</li>
                    <li class="mb-2"><strong>Kemandirian:</strong> Membangun kemandirian ekonomi masyarakat Desa Bumi Jaya.</li>
                </ul>

                <p>
                    Hingga saat ini, RUMUS BUMI JAYA terus berkembang dan telah membantu lebih dari 200 UMKM di Desa Bumi Jaya
                    untuk meningkatkan kapasitas usaha mereka. Kami berkomitmen untuk terus memberikan kontribusi positif
                    bagi perekonomian masyarakat Desa Bumi Jaya dan sekitarnya.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
