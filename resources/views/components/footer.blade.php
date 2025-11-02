<footer class="orange-primary text-white">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">RUMUS Desa Bumi Jaya</h3>
                <p class="mb-4">Mewujudkan UMKM Desa yang Mandiri dan Berdaya Saing.</p>
                <p>&copy; 2025 RUMUS Desa Bumi Jaya. All rights reserved.</p>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <p>Desa Bumi Jaya, Kec. Bumi Jaya, Kab. Tangerang</p>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        <p>+62 812-3456-7890</p>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        <p>info@rumusbumijaya.desa.id</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Jelajahi</h3>
                <div class="grid grid-cols-2 gap-2">
                    <a href="{{ route('home') }}" class="hover:text-gray-200">Beranda</a>
                    <a href="{{ route('tentang.index') }}" class="hover:text-gray-200">Tentang Kami</a>
                    <a href="{{ route('produk.index') }}" class="hover:text-gray-200">Produk</a>
                    <a href="{{ route('umkm.index') }}" class="hover:text-gray-200">UMKM</a>
                    <a href="{{ route('kegiatan.index') }}" class="hover:text-gray-200">Kegiatan</a>
                    <a href="{{ route('berita.index') }}" class="hover:text-gray-200">Berita</a>
                </div>

                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
