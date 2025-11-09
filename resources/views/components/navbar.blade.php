<!-- Navbar Component -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

<nav class="relative bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>

      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <img src="{{ asset('coding.png') }}" alt="Logo" class="h-8 w-auto" />
        </div>

        <div class="hidden sm:flex flex-1 justify-center">
          <div class="flex space-x-4">

            <a href="{{ route('home') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Home</a>
            <a href="{{ route('about') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">About</a>
            <a href="{{ route('skills') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('skills') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Skills</a>
            <a href="{{ route('contact') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Contact</a>

          </div>
        </div>
      </div>
    </div>
  </div>

  <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">

      <a href="{{ route('home') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Home</a>
      <a href="{{ route('about') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">About</a>
      <a href="{{ route('skills') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('skills') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Skills</a>
      <a href="{{ route('contact') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Contact</a>

    </div>
  </el-disclosure>
</nav>
