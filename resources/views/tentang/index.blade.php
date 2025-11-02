@extends('layouts.app')

@section('title', 'Tentang Kami - RUMUS BUMI JAYA')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold orange-text">Tentang Kami</h1>
        <p class="text-gray-600 mt-2">Kenali lebih dekat RUMUS BUMI JAYA</p>
    </div>
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-3xl font-bold mb-4 orange-text">Tentang RUMUS BUMI JAYA</h2>
                <p class="text-gray-700 mb-4">
                    RUMUS (Rumah Usaha) BUMI JAYA adalah sebuah inisiatif untuk mengembangkan UMKM di Desa Bumi Jaya.
                    Kami berkomitmen untuk memberdayakan masyarakat lokal melalui pelatihan, pendampingan, dan akses pasar
                    yang lebih luas.
                </p>
                <p class="text-gray-700">
                    Melalui RUMUS BUMI JAYA, kami berharap dapat menciptakan ekosistem UMKM yang kuat, mandiri, dan
                    berdaya saing di tingkat regional maupun nasional.
                </p>
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-4 orange-text">Visi & Misi</h2>
                <p class="text-gray-700 mb-4">
                    Visi kami adalah menjadikan Desa Bumi Jaya sebagai sentra UMKM unggulan yang mampu bersaing di pasar
                    global. Kami percaya bahwa potensi lokal yang dikembangkan dengan baik dapat memberikan dampak ekonomi
                    yang signifikan bagi masyarakat.
                </p>
                <p class="text-gray-700">
                    Misi kami adalah memberikan pendampingan intensif, pelatihan berkualitas, dan akses pasar yang
                    memadai bagi para pelaku UMKM di Desa Bumi Jaya.
                </p>
            </div>
        </div>
    </div>
</section>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="{{ route('tentang.sejarah') }}" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 block">
            <div class="p-6">
                <div class="w-16 h-16 bg-orange-primary rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-history text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Apa Itu RUMUS</h3>
                <p class="text-gray-700">Sejarah dan latar belakang berdirinya RUMUS BUMI JAYA</p>
            </div>
        </a>

        <a href="{{ route('tentang.visi-misi') }}" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 block">
            <div class="p-6">
                <div class="w-16 h-16 bg-orange-primary rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-eye text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Visi & Misi</h3>
                <p class="text-gray-700">Visi dan misi RUMUS BUMI JAYA dalam mengembangkan UMKM</p>
            </div>
        </a>

        <a href="{{ route('tentang.tujuan') }}" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 block">
            <div class="p-6">
                <div class="w-16 h-16 bg-orange-primary rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-bullseye text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Tujuan & Manfaat</h3>
                <p class="text-gray-700">Tujuan dan manfaat program RUMUS BUMI JAYA</p>
            </div>
        </a>

        <a href="{{ route('tentang.anggota') }}" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 block">
            <div class="p-6">
                <div class="w-16 h-16 bg-orange-primary rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Daftar Anggota UMKM</h3>
                <p class="text-gray-700">Daftar UMKM yang bergabung dalam program RUMUS</p>
            </div>
        </a>

        <a href="{{ route('tentang.struktur') }}" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 block">
            <div class="p-6">
                <div class="w-16 h-16 bg-orange-primary rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-sitemap text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Struktur Organisasi</h3>
                <p class="text-gray-700">Struktur organisasi RUMUS BUMI JAYA</p>
            </div>
        </a>
    </div>
</div>
@endsection
