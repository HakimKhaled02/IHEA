<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'IHEC Award Management System')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/ihealogo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ihec-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Hamburger Menu Button -->
    <button class="hamburger-menu {{ request()->routeIs('home') ? 'hero-hamburger' : 'fixed-hamburger' }}" id="hamburgerMenu" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- Mobile Menu Overlay -->
    <div class="menu-overlay" id="menuOverlay">
        <nav class="mobile-menu">
            <div class="menu-header">
                <img src="{{ asset('assets/ihealogo.png') }}" alt="IHEC Logo" class="menu-logo">
                <h2>IHEC Awards 2026</h2>
            </div>
            <ul class="menu-list">
                <li><a href="{{ route('home') }}" class="menu-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="menu-link {{ request()->routeIs('about') ? 'active' : '' }}">About International Halal Awards 2026</a></li>
                <li><a href="{{ route('mission') }}" class="menu-link {{ request()->routeIs('mission') ? 'active' : '' }}">Mission & Purpose</a></li>
                <li><a href="{{ route('why-matters') }}" class="menu-link {{ request()->routeIs('why-matters') ? 'active' : '' }}">Why The International Halal Awards Matter</a></li>
                <li><a href="{{ route('categories') }}" class="menu-link {{ request()->routeIs('categories') ? 'active' : '' }}">Award Categories</a></li>
                <li><a href="{{ route('eligibility') }}" class="menu-link {{ request()->routeIs('eligibility') ? 'active' : '' }}">Eligibility Requirements</a></li>
                <li><a href="{{ route('how-to-enter') }}" class="menu-link {{ request()->routeIs('how-to-enter') ? 'active' : '' }}">How To Enter</a></li>
                <li><a href="{{ route('submission-rules') }}" class="menu-link {{ request()->routeIs('submission-rules') ? 'active' : '' }}">Submission Rules</a></li>
                <li><a href="{{ route('judging-framework') }}" class="menu-link {{ request()->routeIs('judging-framework') ? 'active' : '' }}">Judging Framework & Standards</a></li>
                <li><a href="{{ route('judging-criteria') }}" class="menu-link {{ request()->routeIs('judging-criteria') ? 'active' : '' }}">Judging Criteria</a></li>
                <li><a href="{{ route('confidentiality') }}" class="menu-link {{ request()->routeIs('confidentiality') ? 'active' : '' }}">Confidentiality & Code of Conduct</a></li>
                <li><a href="{{ route('winner-recognition') }}" class="menu-link {{ request()->routeIs('winner-recognition') ? 'active' : '' }}">Winner Recognition & Usage Rights</a></li>
                <li><a href="{{ route('faq') }}" class="menu-link {{ request()->routeIs('faq') ? 'active' : '' }}">FAQ's</a></li>
                <li><a href="{{ route('fees-packages') }}" class="menu-link {{ request()->routeIs('fees-packages') ? 'active' : '' }}">Awards Participation Fees & Prestige Packages</a></li>
                <li><a href="{{ route('awards.index') }}" class="menu-link {{ request()->routeIs('awards.*') ? 'active' : '' }}">View Awards</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <main class="main-content-simple">
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

        @yield('content')
    </main>

    <script>
        // Hamburger Menu Toggle
        const hamburgerMenu = document.getElementById('hamburgerMenu');
        const menuOverlay = document.getElementById('menuOverlay');
        
        hamburgerMenu.addEventListener('click', function() {
            hamburgerMenu.classList.toggle('active');
            menuOverlay.classList.toggle('active');
            document.body.style.overflow = menuOverlay.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu when clicking on overlay
        menuOverlay.addEventListener('click', function(e) {
            if (e.target === menuOverlay) {
                hamburgerMenu.classList.remove('active');
                menuOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // Close menu when clicking on a menu link
        const menuLinks = document.querySelectorAll('.menu-link');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                hamburgerMenu.classList.remove('active');
                menuOverlay.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    </script>

    @stack('scripts')
</body>
</html>

