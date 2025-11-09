<!doctype html>
<html lang="en" class="h-full bg-gray-900">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Title untuk tab browser --}}
    <title>{{ $title ?? 'Website Saya' }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body class="h-full text-white">

    <div class="min-h-full">

        {{-- Navbar --}}
        <x-navbar />

        {{-- Header hanya tampil jika diset secara manual --}}
        @isset($header)
            <x-header>
                {{ $header }}
            </x-header>
        @endisset

        {{-- Page Content --}}
        <main>
            <div>
                {{ $slot }}
            </div>
        </main>

    </div>
<x-footer />

</body>
</html>
