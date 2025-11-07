@php
    use Illuminate\Support\Facades\Request;
@endphp
<nav class="orange-primary shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-3">
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}" class="text-white font-bold text-xl flex items-center space-x-3">
                    <img src="{{ asset('image/logo.jpg') }}" alt="RUMUS BUMI JAYA" class="h-14 w-14 rounded-full object-cover border-2 border-white shadow-md">
                    <div class="w-0.5 h-10 bg-white opacity-80"></div>
                    <span class="tracking-wide">RUMUS BUMI JAYA</span>
                </a>
            </div>

            <div class="hidden md:flex space-x-8 items-center text-white font-semibold">
                <!-- BERANDA -->
                <a href="{{ route('home') }}"
                    class="relative pb-1 text-white hover:text-gray-200 transition duration-300
                    {{ Request::is('/') ? 'after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-white' : '' }}">
                    Beranda
                </a>

                <!-- TENTANG KAMI -->
                <div class="relative group">
                    <button class="text-white hover:text-gray-200 transition duration-300 flex items-center">
                        Tentang Kami
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute left-0 mt-1 pt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <a href="{{ route('tentang.sejarah') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Apa Itu RUMUS</a>
                        <a href="{{ route('tentang.visi-misi') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Visi & Misi</a>
                        <a href="{{ route('tentang.tujuan') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Tujuan & Manfaat</a>
                        <a href="{{ route('tentang.anggota') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Daftar Anggota UMKM</a>
                        <a href="{{ route('tentang.struktur') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Struktur Organisasi</a>
                    </div>
                </div>

                <!-- PRODUK -->
                <a href="{{ route('produk.index') }}"
                    class="relative pb-1 text-white hover:text-gray-200 transition duration-300
                    {{ Request::is('produk*') ? 'after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-white' : '' }}">
                    Produk
                </a>

                <!-- GALERI & BERITA -->
                <div class="relative group">
                    <button class="text-white hover:text-gray-200 transition duration-300 flex items-center">
                        Galeri & Berita
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute left-0 mt-1 pt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <a href="{{ route('galeri.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Galeri</a>
                        <a href="{{ route('berita.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Berita</a>
                        <a href="{{ route('kegiatan.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Kegiatan Rumus</a>
                        <a href="{{ route('kisah.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Kisah Sukses</a>
                        <a href="{{ route('kegiatan.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-orange-100">Motivasi</a>
                    </div>
                </div>

                <!-- KONTAK -->
                <a href="{{ route('kontak.index') }}"
                    class="relative pb-1 text-white hover:text-gray-200 transition duration-300
                    {{ Request::is('kontak*') ? 'after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-white' : '' }}">
                    Kontak
                </a>

                <!-- tombol login -->
                <a href="{{ route('filament.admin.auth.login') }}"
                    class="border-0.5 border-white text-white bg-orange-500 hover:bg-orange-600
                    font-semibold px-4 py-2  rounded-full transition duration-300 shadow-md">
                Login
            </a>
            </div>

            <!-- MOBILE MENU TOGGLE -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-gray-200 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="{{ route('home') }}" class="block py-2 text-white hover:text-gray-200">Beranda</a>
            <div class="py-2">
                <p class="text-white font-semibold">Tentang Kami</p>
                <a href="{{ route('tentang.sejarah') }}" class="block pl-4 py-1 text-white hover:text-gray-200">Apa Itu RUMUS</a>
                <a href="{{ route('tentang.visi-misi') }}" class="block pl-4 py-1 text-white hover:text-gray-200">Visi & Misi</a>
                <a href="{{ route('tentang.tujuan') }}" class="block pl-4 py-1 text-white hover:text-gray-200">Tujuan & Manfaat</a>
                <a href="{{ route('tentang.anggota') }}" class="block pl-4 py-1 text-white hover:text-gray-200">Daftar Anggota UMKM</a>
                <a href="{{ route('tentang.struktur') }}" class="block pl-4 py-1 text-white hover:text-gray-200">Struktur Organisasi</a>
            </div>
            <div class="py-2">
                <p class="text-white font-semibold">Berita & Galeri</p>
                <a href="{{ route('berita.index') }}" class="block py-2 text-white hover:text-gray-200">Berita</a>
                <a href="{{ route('kisah.index') }}" class="block py-2 text-white hover:text-gray-200">Kisah Sukses</a>
                <a href="{{ route('kegiatan.index') }}" class="block py-2 text-white hover:text-gray-200">Motivasi</a>
                <a href="{{ route('galeri.index') }}" class="block py-2 text-white hover:text-gray-200">Galeri</a>
                <a href="{{ route('kontak.index') }}" class="block py-2 text-white hover:text-gray-200">Kontak</a>
            </div>

        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
