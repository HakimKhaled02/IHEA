<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', 'International Halal Economic Award 2026')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body class="min-h-screen flex flex-col font-sans bg-gradient-to-br from-halal-dark via-gray-900 to-halal-dark">
    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="bg-gradient-to-r from-halal-dark to-halal-green text-white py-8 mt-16">
        <div class="max-w-6xl mx-auto px-8 text-center">
            <div class="mb-4">
                <h3 class="text-2xl font-bold text-halal-gold mb-2">International Halal Economic Award 2026</h3>
                <p class="text-white/80">Recognizing Excellence in the Global Halal Economy</p>
            </div>
            <div class="border-t border-halal-gold/30 pt-4">
                <p class="text-white/70">Copyright by world islamic economic development 2025 - 2026 c</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
