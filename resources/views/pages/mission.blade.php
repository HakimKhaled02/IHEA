@extends('layouts.app')

@section('title', 'Mission & Purpose')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/mission-page.css') }}">
@endpush

@section('content')
<div class="mission-page">
    <!-- Hero Section -->
    <div class="full-width-section">
        <div class="hero-full">
            <!-- Video Background -->
            <video 
                class="hero-video" 
                autoplay 
                loop 
                muted 
                playsinline
                preload="auto"
                style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    z-index: 1;
                    opacity: 1;
                    filter: blur(1px);
                    pointer-events: none;
                "
                onerror="console.error('Video failed to load'); this.style.display='none';"
                onloadstart="console.log('Video loading started...');"
                oncanplay="console.log('Video can play'); this.play().catch(e => console.error('Autoplay blocked:', e));"
                onloadeddata="console.log('Video data loaded');"
            >
                <source src="{{ asset('assets/halal-waves-bg.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            <!-- Video Overlay for Text Readability -->
            <div class="video-overlay" style="
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.45);
                z-index: 2;
                pointer-events: none;
            "></div>
            
            <div class="hero-content">
                <div class="hero-badge scroll-animate fade-in-up">
                    INTERNATIONAL HALAL ECONOMIC AWARD 2026
                </div>
                <h1 class="hero-title scroll-animate fade-in-up delay-1">
                    MISSION & PURPOSE
                </h1>
                <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                    The International Halal Economic Award 2026 was created to serve four key objectives
                </p>
            </div>
        </div>
    </div>
    
    <!-- Content Section -->
    <div class="mission-content-wrapper">
        <div class="mission-content-grid">
            <!-- Left Column -->
            <div class="mission-left-column">
                <h2 class="section-heading">Mission & Purpose</h2>
                <h3 class="mission-main-title">INTERNATIONAL HALAL ECONOMIC AWARD (IHEA)</h3>
                <p class="mission-description">The International Halal Economic Award 2026 was created to serve four key objectives.</p>
                
                <div class="objectives-left">
                    <div class="objective-item">
                        <svg class="objective-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                            <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                            <path d="M4 22h16"></path>
                            <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                            <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                            <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                        </svg>
                        <div class="objective-details">
                            <h4 class="objective-title">CELEBRATE EXCELLENCE IN THE GLOBAL HALAL ECOSYSTEM</h4>
                            <p class="objective-text">To recognize organizations that exemplifies excellence in quality, compliance, innovation and business performance</p>
                        </div>
                    </div>

                    <div class="objective-item">
                        <svg class="objective-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <div class="objective-details">
                            <h4 class="objective-title">STRENGTHEN GLOBAL CONFIDENCE IN HALAL STANDARDS</h4>
                            <p class="objective-text">To elevate global trust by highlighting initiatives that adhere to the highest levels of Halal, ethical, sustainability and traceability requirements</p>
                        </div>
                    </div>

                    <div class="objective-item">
                        <svg class="objective-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="9" y1="18" x2="15" y2="18"></line>
                            <line x1="10" y1="22" x2="14" y2="22"></line>
                            <line x1="15" y1="12" x2="20.55" y2="5.94"></line>
                            <path d="M2 10.5a4 4 0 0 1 4-4 4 4 0 0 1 4 4 4 4 0 0 1-4 4 4 4 0 0 1-4-4z"></path>
                            <path d="M12 18a4 4 0 0 0 4-4V6a4 4 0 0 0-8 0v8a4 4 0 0 0 4 4z"></path>
                        </svg>
                        <div class="objective-details">
                            <h4 class="objective-title">ENCOURAGE INNOVATION & INDUSTRY LEADERSHIP</h4>
                            <p class="objective-text">To inspire breakthrough ideas, responsible practices and forward-thinking strategies that contribute to the long-term growth of Halal industries</p>
                        </div>
                    </div>

                    <div class="objective-item">
                        <svg class="objective-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                        <div class="objective-details">
                            <h4 class="objective-title">FOSTER INTERNATIONAL COOPERATION & MARKET EXPANSION</h4>
                            <p class="objective-text">To bring together global Halal stakeholders—government, industry leaders, investors, innovators and certification bodies—to build networks and unlock opportunities</p>
                        </div>
                    </div>

                    <div class="mission-closing">
                        <p class="closing-text">The Awards stand as a global benchmark designed to honor leadership, integrity and progressive impact in an ever-expanding global Halal economy</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="mission-right-column">
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Scroll Animation with Intersection Observer
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };

    const scrollObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-animated');
                scrollObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Initialize animations when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        const animatedElements = document.querySelectorAll('.scroll-animate');
        animatedElements.forEach(el => {
            scrollObserver.observe(el);
        });
    });
</script>
@endpush
