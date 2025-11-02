@extends('layouts.app')

@section('title', 'Visi Misi - RUMUS Bumi Jaya')

@section('content')
    {{-- HEADER SECTION --}}
    <section class="relative bg-gradient-to-r from-[#F97316] to-[#fb923c] text-white py-24 overflow-hidden z-0">
        {{-- Dekorasi Lingkaran --}}
        <div class="absolute top-[-80px] right-[-80px] w-80 h-80 bg-white opacity-25 rounded-full"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-72 h-72 bg-white opacity-20 rounded-full"></div>

        {{-- Konten Judul --}}
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl font-bold mb-3 drop-shadow-md">Visi Misi</h1>
            <p class="text-sm text-white/90">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> >
                <a href="#" class="hover:underline">Tentang Kami</a> >
                <span class="font-semibold">Visi Misi</span>
            </p>
        </div>
    </section>

    {{-- ISI HALAMAN --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 md:flex md:space-x-12 items-start">
            {{-- Foto --}}
            <div class="md:w-1/3 mb-10 md:mb-0">
                <div class="w-full h-72 bg-gray-200 flex items-center justify-center text-gray-500 font-semibold rounded-lg shadow">
                    Foto
                </div>
            </div>

            {{-- Teks --}}
            <div class="md:w-2/3 space-y-12">
                {{-- VISI --}}
                <div>
                    <h2 class="text-2xl font-bold mb-2 text-gray-900 relative inline-block">
                        Visi
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-orange-500"></span>
                    </h2>
                    <p class="text-gray-700 leading-relaxed text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                {{-- MISI --}}
                <div>
                    <h2 class="text-2xl font-bold mb-2 text-gray-900 relative inline-block">
                        Misi
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-orange-500"></span>
                    </h2>
                    <p class="text-gray-700 leading-relaxed text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
