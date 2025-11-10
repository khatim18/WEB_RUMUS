@props(['item'])

<div class="bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden w-80">
    <img src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/placeholder/kegiatan.jpg') }}"
         alt="{{ $item->judul }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-900 mb-1">
            {{ $item->judul }}
        </h3>
        <p class="text-gray-600 text-sm mb-2">
            {{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}
        </p>
        <p class="text-gray-700 text-sm">
            {{ Str::limit($item->deskripsi, 80) }}
        </p>
    </div>
</div>
