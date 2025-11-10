@props([
    'gambar' => asset('images/placeholder/produk.jpg'),
    'nama' => 'Nama Produk',
    'harga' => null,
    'deskripsi' => null,
    'kategori' => null,
    'slug' => '#',
])

<div class="product-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 h-full flex flex-col">
    <div class="aspect-[4/3] w-full">
        <img src="{{ $gambar }}"
             alt="{{ $nama }}"
             class="w-full h-48 object-cover">
    </div>

    <div class="p-4 flex flex-col flex-grow">
        {{-- Nama Produk --}}
        <h3 class="text-lg font-bold text-gray-900 mb-2 hover:text-orange-600 transition line-clamp-2">
            <a href="{{ route('produk.show', $slug) }}">{{ $nama }}</a>
        </h3>

        {{-- Deskripsi Singkat --}}
        @if($deskripsi)
            <p class="text-gray-600 text-sm mb-3 line-clamp-3 flex-grow">{{ Str::limit($deskripsi, 80) }}</p>
        @endif

        {{-- Harga --}}
        @if($harga)
            <p class="text-orange-600 font-bold text-lg mb-3">
                Rp. {{ number_format($harga, 0, ',', '.') }}
            </p>
        @endif

        {{-- Kategori --}}
        @if($kategori)
            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full self-start">
                {{ $kategori }}
            </span>
        @endif

        {{-- Tombol Detail --}}
        <div class="mt-4">
            <a href="{{ route('produk.show', $slug) }}"
               class="inline-block text-sm text-orange-600 hover:text-orange-700 font-semibold hover:underline">
                Lihat Detail →
            </a>
        </div>
    </div>
</div>
