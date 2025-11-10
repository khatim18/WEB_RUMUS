@extends('layouts.app')

@section('title', $produk->nama_produk . ' - RUMUS Bumi Jaya')

@section('content')

<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            {{-- Gambar Produk --}}
            <div>
                @php
                    $cover = $produk->gambar->where('is_cover', true)->first();
                    $gambarUtama = $cover
                        ? asset('storage/' . $cover->path_gambar)
                        : ($produk->gambar->first()
                            ? asset('storage/' . $produk->gambar->first()->path_gambar)
                            : asset('images/placeholder/produk.jpg'));
                @endphp
            <img src="{{ $gambarUtama }}" alt="{{ $produk->nama_produk }}"
                 class="rounded-xl shadow-md w-full h-96 object-cover">

            @if($produk->gambar->count() > 1)
                <div class="flex gap-3 mt-4 overflow-x-auto">
                    @foreach($produk->gambar as $g)
                        <img src="{{ asset('storage/' . $g->path_gambar) }}"
                             class="w-20 h-20 object-cover rounded-lg border border-gray-200 hover:scale-105 transition">
                    @endforeach
                </div>
            @endif
        </div>

        {{-- Info Produk --}}
        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-1">{{ $produk->nama_produk }}</h2>
            <p class="text-gray-500 text-sm mb-2">
                {{ $produk->kategori->nama_kategori ?? 'Tanpa Kategori' }}
            </p>

            <p class="text-orange-600 text-2xl font-semibold mb-4">
                Rp {{ number_format($produk->harga, 0, ',', '.') }}
            </p>

            <p class="text-gray-700 leading-relaxed mb-6">
                {!! nl2br(e($produk->deskripsi_singkat ?? $produk->deskripsi)) !!}
            </p>


            {{-- Link Belanja --}}
            <div class="bg-gray-50 rounded-xl p-5 shadow-sm mb-6">
                <h3 class="font-bold text-lg mb-3 text-gray-800">Belanja</h3>

                   @if($produk->links->count() > 0)
                        <div class="flex items-center gap-5 flex-warp">
                            @foreach($produk->links as $link)
                                @php
                                    $ikon = $link->ikon ? asset('storage/' . $link->ikon) : null;
                                        // fallback ke folder lokal jika tidak ada di DB
                                        if (!$ikon) {
                                            $ikon = match(strtolower($link->platform)) {
                                                'shopee' => asset('marketplace-icons/shopee.svg'),
                                                'tokopedia' => asset('marketplace-icons/tokopedia.png'),
                                                'tiktok' => asset('marketplace-icons/tiktok.svg'),
                                                'lazada' => asset('marketplace-icons/lazada.png'),
                                                default => asset('marketplace-icons/default.svg'),
                                            };
                                        }
                                @endphp
                                <a href="{{ $link->url }}"
                                    target="_blank"
                                    class="w-10 h-10 object-contain hover:scale-110 transition">
                                        <img src="{{ $ikon }}"
                                                alt="{{ $link->platform }}"
                                                class="w-6 h-6 object-contain">
                                        <span>{{ ucfirst($link->platform) }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
                </div>
            </div>
            <div>
                <a href="{{ route('produk.index') }}"
                   class="mt-4 inline-block bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition">
                   ← Kembali ke Daftar Produk
                </a>
            </div>
        </div>
    </div>

    {{-- Deskripsi Lengkap --}}
    <div class="mt-16 mx-16">
        <h3 class="text-xl font-bold text-gray-900 mb-3">Deskripsi</h3>
        <p class="text-gray-700 leading-relaxed mb-8">{!! nl2br(e($produk->deskripsi_lengkap)) !!}</p>


        {{-- Galeri --}}
        <h3 class="text-xl font-bold text-gray-900 mb-3">Gambar</h3>
        <div class="flex gap-4 overflow-x-auto pb-2">
            @foreach($produk->gambar as $g)
                <img src="{{ asset('storage/' . $g->path_gambar) }}"
                     class="w-56 h-40 object-cover rounded-lg shadow-sm">
            @endforeach
        </div>
    </div>

    {{-- Legalitas Produk --}}
    <div class="mt-16 bg-gray-50 rounded-2xl p-8 shadow-sm">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Legalitas Produk</h3>
        <p class="text-gray-700 leading-relaxed mb-8">
            Kami berkomitmen untuk menghadirkan produk UMKM yang berkualitas dan aman bagi konsumen.
            Produk kami telah mengantongi berbagai sertifikasi resmi, seperti Nomor Induk Berusaha (NIB),
            Sertifikat Produksi Pangan Industri Rumah Tangga (PIRT), dan Sertifikat Halal dari lembaga berwenang.
        </p>

        <div class="flex gap-6 justify-start flex-wrap">
            @foreach($produk->legalitas as $item)
                <div class="bg-white rounded-full w-28 h-28 flex flex-col items-center justify-center shadow-md border border-gray-200 text-center p-2">
                    <span class="text-sm font-semibold text-gray-800">{{ $item->nama_legalitas }}</span>
                    @if($item->pivot)
                        <span class="text-xs text-gray-500 mt-1">{{ $item->pivot->nomor_sertifikat ?? '' }}</span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
</section>
@endsection
