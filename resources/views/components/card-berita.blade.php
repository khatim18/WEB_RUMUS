@props([
    'gambar' => asset('images/placeholder/berita.jpg'),
    'judul' => 'Judul Berita',
    'deskripsi' => null,
    'tag' => null,
    'penulis' => null,
    'tanggal' => null,
    'slug' => null,
])

<div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
    {{-- Gambar Berita --}}
    <a href="{{ route('berita.show', $slug) }}">
        <img src="{{ $gambar }}"
             alt="{{ $judul }}"
             class="w-full h-48 object-cover rounded-t-lg">
    </a>

    <div class="p-4">
        {{-- Tag + Tanggal --}}
        <div class="flex items-center mb-2">
            @if($tag)
                <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">{{ $tag }}</span>
            @endif
            @if($tanggal)
                <span class="text-gray-500 text-xs ml-auto">
                    {{ \Carbon\Carbon::parse($tanggal)->format('d F Y') }}
                </span>
            @endif
        </div>

        {{-- Judul --}}
        <h3 class="text-lg font-bold text-gray-900 mb-1 hover:text-orange-600 transition">
            <a href="{{ route('berita.show', ['slug' => $slug]) }}">{{ $judul }}</a>
        </h3>

        {{-- Deskripsi Singkat --}}
        @if($deskripsi)
            <p class="text-gray-600 text-sm mb-3">{{ Str::limit(strip_tags($deskripsi), 100) }}</p>
        @endif

        {{-- Penulis --}}
        @if($penulis)
            <p class="text-gray-500 text-xs italic">
                Oleh: {{ $penulis }}
            </p>
        @endif

        {{-- Tombol Selengkapnya --}}
        <a href="{{ route('berita.show', ['slug' => $slug]) }}"
           class="inline-block mt-3 text-orange-600 text-sm font-semibold hover:underline">
           Baca Selengkapnya →
        </a>
    </div>
</div>
