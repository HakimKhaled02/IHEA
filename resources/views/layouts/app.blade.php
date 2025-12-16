<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'IHEC Award Management System')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/iheclogo1.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ihec-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>
    <div class="app-layout">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <a href="{{ route('awards.index') }}" class="sidebar-logo-link">
                    <img src="{{ asset('assets/iheclogo1.png') }}" alt="IHEC Logo" class="sidebar-logo">
                    <div class="sidebar-title">
                        <h1>IHEC Award System</h1>
                        <p class="sidebar-subtitle">Halal Economic Conference</p>
                    </div>
                </a>
            </div>
            <nav class="sidebar-nav">
                <a href="{{ route('awards.index') }}" class="sidebar-link {{ request()->routeIs('awards.index') ? 'active' : '' }}">
                    <span class="sidebar-icon">🏆</span>
                    <span>Awards</span>
                </a>
                <a href="{{ route('awards.create') }}" class="sidebar-link sidebar-link-primary {{ request()->routeIs('awards.create') ? 'active' : '' }}">
                    <span class="sidebar-icon">➕</span>
                    <span>Add Award</span>
                </a>
            </nav>
            <div class="sidebar-footer">
                <p>&copy; {{ date('Y') }} IHEC</p>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="main-content-wrapper">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(isset($errors) && $errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="content-container">
                @yield('content')
            </div>
        </main>
    </div>

    @stack('scripts')
</body>
</html>

