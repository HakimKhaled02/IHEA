<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Award Management System')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body class="min-h-screen flex flex-col font-sans leading-relaxed text-text-primary bg-bg-secondary">
    <nav class="bg-gradient-to-r from-primary to-secondary text-white py-6 shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-8 flex justify-between items-center">
            <div class="nav-brand">
                <h1 class="text-3xl font-bold">🏆 Award System</h1>
            </div>
            <ul class="flex list-none gap-6 items-center">
                <li><a href="{{ route('awards.index') }}" class="text-white font-medium px-4 py-2 rounded-md transition-all duration-300 hover:bg-white hover:bg-opacity-10">Awards</a></li>
                <li><a href="{{ route('awards.create') }}" class="text-white font-medium px-4 py-2 rounded-md transition-all duration-300 bg-white bg-opacity-20 border border-white border-opacity-30 hover:bg-opacity-30">Add Award</a></li>
            </ul>
        </div>
    </nav>

    <main class="flex-1 py-8">
        <div class="max-w-6xl mx-auto px-8">
            @if(session('success'))
                <div class="p-4 rounded-lg mb-8 animate-slide-down bg-green-50 text-green-800 border-l-4 border-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(isset($errors) && $errors->any())
                <div class="p-4 rounded-lg mb-8 animate-slide-down bg-red-50 text-red-800 border-l-4 border-danger">
                    <ul class="m-2 mt-0 ml-6">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="bg-text-primary text-white py-8 text-center mt-auto">
        <div class="max-w-6xl mx-auto px-8">
            <p class="text-white text-opacity-80 m-0">&copy; {{ date('Y') }} Award Management System. All rights reserved.</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

