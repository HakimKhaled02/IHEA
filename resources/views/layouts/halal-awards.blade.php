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

    <footer class="bg-gray-900 text-white py-6 mt-auto">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="flex items-center justify-center mb-2">
                <span class="text-sm">International Halal Economic Award 2026</span>
            </div>
            <p class="text-xs text-gray-400">© 2025-2026 World Islamic Development. All rights reserved.</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
