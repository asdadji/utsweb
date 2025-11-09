<x-layout>
  <x-slot:title>About</x-slot:title>

  <x-slot:header>
        <!-- Kalau mau header, isi di sini. Kalau tidak, biarkan kosong. -->
  </x-slot:header>

    <div class="min-h-screen flex items-center justify-center px-3 py-6">
      <div class="min-h-screen flex items-center justify-center px-3 py-6">
  <div class="max-w-3xl w-full bg-gray-800/50 backdrop-blur-sm rounded-xl p-8 shadow-lg border border-white/10">
    
    <div class="flex flex-col md:flex-row items-center gap-8">
      
      <!-- Foto Profil -->
      <img src="{{ asset('miku.png') }}" alt="Profile Photo" class="w-40 h-40 object-cover rounded-full shadow-lg border border-white/20">

      <!-- Identitas -->
      <div>
        <h1 class="text-3xl font-bold">Asfar Danu Adji</h1>
        <p class="text-indigo-300 text-lg mt-1">Fullstack Developer</p>
        <p class="text-gray-300 mt-4 leading-relaxed">
          Saya adalah seorang pengembang web yang berfokus pada pembuatan aplikasi modern,
          responsif, dan mudah digunakan. Menguasai pengembangan frontend & backend
          menggunakan teknologi seperti Laravel, React, dan TailwindCSS.
        </p>
      </div>
    </div>

    <div class="mt-10 border-t border-white/10 pt-6">
  <h2 class="text-xl font-semibold mb-5">Informasi Singkat</h2>

  <div class="grid sm:grid-cols-2 gap-4">

    <div class="flex items-start gap-3 bg-white/5 p-4 rounded-lg border border-white/10">
      <span class="text-2xl">📍</span>
      <div>
        <p class="text-sm text-gray-400">Berdomisili</p>
        <p class="text-gray-200 font-medium">Indonesia</p>
      </div>
    </div>

    <div class="flex items-start gap-3 bg-white/5 p-4 rounded-lg border border-white/10">
      <span class="text-2xl">🎓</span>
      <div>
        <p class="text-sm text-gray-400">Latar Belakang</p>
        <p class="text-gray-200 font-medium">Web & Software Development</p>
      </div>
    </div>

    <div class="flex items-start gap-3 bg-white/5 p-4 rounded-lg border border-white/10">
      <span class="text-2xl">💼</span>
      <div>
        <p class="text-sm text-gray-400">Minat</p>
        <p class="text-gray-200 font-medium">UI/UX, API Development, Web Apps</p>
      </div>
    </div>

    <div class="flex items-start gap-3 bg-white/5 p-4 rounded-lg border border-white/10">
      <span class="text-2xl">📧</span>
      <div>
        <p class="text-sm text-gray-400">Email</p>
        <p class="text-indigo-300 font-medium">danu@example.com</p>
      </div>
    </div>

  </div>
</div>
    <!--<div class="mt-8 flex gap-4">
      <a href="#" class="px-5 py-2 rounded-md bg-indigo-600 hover:bg-indigo-500 transition">Download CV</a>
      <a href="{{ route('contact') }}" class="px-5 py-2 rounded-md bg-white/10 hover:bg-white/20 transition">Hubungi Saya</a>
    </div>-->
  </div>
</div>
    </div>

</x-layout>
