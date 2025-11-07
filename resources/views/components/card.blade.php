@props([
    'gambar' => asset('images/placeholder/produk.jpg'),
    'nama' => 'Nama Produk',
    'harga' => null,
    'deskripsi' => null,
    'kategori' => null,
    'slug' => '#',
])

<div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
    <a href="{{ route('produk.show', $slug) }}">
        <img src="{{ $gambar }}"
             alt="{{ $nama }}"
             class="w-full h-48 object-cover">
    </a>

    <div class="p-4">
        {{-- Nama Produk --}}
        <h3 class="text-lg font-bold text-gray-900 mb-1 hover:text-orange-600 transition">
            <a href="{{ route('produk.show', $slug) }}">{{ $nama }}</a>
        </h3>

        {{-- Deskripsi Singkat --}}
        @if($deskripsi)
            <p class="text-gray-600 text-sm mb-3">{{ Str::limit($deskripsi, 60) }}</p>
        @endif

        {{-- Harga --}}
        @if($harga)
            <p class="text-orange-600 font-semibold mb-2">
                Rp. {{ number_format($harga, 0, ',', '.') }}
            </p>
        @endif

        {{-- Kategori --}}
        @if($kategori)
            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded-full">
                {{ $kategori }}
            </span>
        @endif
    </div>
</div>
