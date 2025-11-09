<x-layout>
  <x-slot:title>Home</x-slot:title>

  <x-slot:header>
        <!-- Kosong agar header tidak muncul -->
  </x-slot:header>

<div class="flex items-start justify-center min-h-screen bg-gray-900 text-white pt-20">

    <div class="flex flex-col-reverse md:flex-row 
                gap-10 md:gap-16 
                items-center md:items-start 
                text-center md:text-left">

      <!-- Teks -->
      <div class="md:mt-12"> <!-- Tambah margin only desktop -->
        <h1 class="text-4xl md:text-6xl font-bold">Asfar Danu Adji</h1>
        <p class="text-lg md:text-2xl text-indigo-300 mt-3">Fullstack Developer</p>
      </div>

      <!-- Gambar -->
      <img src="{{ asset('miku.png') }}"
        class="w-40 sm:w-52 md:w-64 rounded-lg shadow-xl transition-transform duration-300 hover:scale-105" />

    </div>

  </div>
</x-layout>
