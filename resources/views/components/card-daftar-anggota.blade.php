@props(['foto', 'nama', 'namaUmkm', 'kategori', 'noHp', 'jabatan'])

<div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-md transition duration-300">
<img src="{{ $foto ? asset('storage/anggota_umkm/'.$foto) : asset('images/placeholder/umkm.jpg') }}"
    alt="{{ $nama }}"
    class="w-full h-32 object-cover rounded-lg mb-3">
    <h3 class="font-semibold">{{ $nama }}</h3>
    <p class="text-gray-600 text-sm">{{ $namaUmkm }}</p>
    <p class="text-gray-500 text-sm">{{ $kategori }}</p>
    <p class="text-gray-500 text-sm">{{ $noHp }}</p>
</div>
