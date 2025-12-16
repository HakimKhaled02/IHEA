@extends('layouts.app')

@section('title', 'Winner Recognition & Usage Rights')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700;800;900&display=swap');
    
    @keyframes slideIn {
        0% { opacity: 0; transform: translateX(-30px); }
        100% { opacity: 1; transform: translateX(0); }
    }
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
    @keyframes borderGlow {
        0%, 100% { border-color: rgba(212, 175, 55, 0.3); }
        50% { border-color: rgba(212, 175, 55, 0.6); }
    }
    @keyframes fadeInUp {
        0% { 
            opacity: 0; 
            transform: translateY(60px); 
        }
        100% { 
            opacity: 1; 
            transform: translateY(0); 
        }
    }
    @keyframes fadeInLeft {
        0% { 
            opacity: 0; 
            transform: translateX(-60px); 
        }
        100% { 
            opacity: 1; 
            transform: translateX(0); 
        }
    }
    @keyframes fadeInRight {
        0% { 
            opacity: 0; 
            transform: translateX(60px); 
        }
        100% { 
            opacity: 1; 
            transform: translateX(0); 
        }
    }
    @keyframes scaleIn {
        0% { 
            opacity: 0; 
            transform: scale(0.8); 
        }
        100% { 
            opacity: 1; 
            transform: scale(1); 
        }
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #0a0a0a 0%, #064e3b 50%, #0a0a0a 100%);
        color: #ffffff;
        overflow-x: hidden;
    }
    
    .full-width-section {
        width: 100vw;
        margin-left: calc(50% - 50vw);
        position: relative;
    }
    
    .hero-full {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #000000;
        border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        position: relative;
        overflow: hidden;
    }
    
        
    .hero-content {
        text-align: center;
        z-index: 2;
        position: relative;
        padding: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }
    
    .hero-title {
        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(2.5rem, 6vw, 5rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, #d4af37, #f4e4bc, #d4af37);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: drop-shadow(0 4px 8px rgba(212, 175, 55, 0.4));
        text-shadow: 0 0 30px rgba(212, 175, 55, 0.3);
        letter-spacing: -0.05em;
    }
    
    .hero-subtitle {
        font-size: clamp(1.2rem, 3vw, 1.8rem);
        font-weight: 300;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 3rem;
        line-height: 1.4;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .hero-badge {
        display: inline-block;
        background: rgba(212, 175, 55, 0.1);
        border: 1px solid rgba(212, 175, 55, 0.3);
        padding: 1rem 3rem;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: rgba(212, 175, 55, 0.9);
        animation: borderGlow 3s ease-in-out infinite;
        transition: all 0.3s ease;
    }
    
    .hero-badge:hover {
        background: rgba(212, 175, 55, 0.2);
        transform: translateY(-2px);
    }
    
    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
    }
    
    .section-content {
        padding: 3rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.02);
        position: relative;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        height: 100%;
    }
    
    .section-content:hover {
        background: rgba(255, 255, 255, 0.04);
        border-color: rgba(212, 175, 55, 0.4);
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 60px rgba(212, 175, 55, 0.2);
    }
    
    .section-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, 
            transparent 0%, 
            rgba(212, 175, 55, 0.6) 50%, 
            transparent 100%);
        border-radius: 16px 16px 0 0;
    }
    
    .section-b .section-content::before,
    .section-d .section-content::before {
        background: linear-gradient(90deg, 
            transparent 0%, 
            rgba(5, 150, 105, 0.6) 50%, 
            transparent 100%);
    }
    
    .section-e {
        grid-column: 1 / -1;
    }
    
    .section-e .section-content {
        max-width: 600px;
        margin: 0 auto;
    }
    
    /* Scroll Animation Classes */
    .scroll-animate {
        opacity: 0;
        transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .scroll-animate.fade-in-up {
        transform: translateY(60px);
    }
    
    .scroll-animate.fade-in-left {
        transform: translateX(-60px);
    }
    
    .scroll-animate.fade-in-right {
        transform: translateX(60px);
    }
    
    .scroll-animate.scale-in {
        transform: scale(0.8);
    }
    
    .scroll-animate.is-animated {
        opacity: 1;
        transform: translateY(0) translateX(0) scale(1);
    }
    
    /* Staggered animation delays */
    .scroll-animate.delay-1 { transition-delay: 0.1s; }
    .scroll-animate.delay-2 { transition-delay: 0.2s; }
    .scroll-animate.delay-3 { transition-delay: 0.3s; }
    .scroll-animate.delay-4 { transition-delay: 0.4s; }
    .scroll-animate.delay-5 { transition-delay: 0.5s; }
    
    .section-header {
        display: flex;
        align-items: flex-start;
        gap: 2rem;
        margin-bottom: 2rem;
        position: relative;
    }
    
    .section-number {
        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(3rem, 6vw, 5rem);
        font-weight: 900;
        line-height: 1;
        flex-shrink: 0;
        min-width: 80px;
        text-align: center;
    }
    
    .alternating-section:nth-child(odd) .section-number {
        color: rgba(212, 175, 55, 0.4);
    }
    
    .alternating-section:nth-child(even) .section-number {
        color: rgba(5, 150, 105, 0.4);
    }
    
    .section-title-group {
        flex: 1;
    }
    
    .section-title {
        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 0.5rem;
        line-height: 1.1;
        letter-spacing: -0.02em;
    }
    
    .section-subtitle {
        font-size: 0.875rem;
        font-weight: 500;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }
    
    .alternating-section:nth-child(odd) .section-subtitle {
        color: rgba(212, 175, 55, 0.8);
    }
    
    .alternating-section:nth-child(even) .section-subtitle {
        color: rgba(5, 150, 105, 0.8);
    }
    
    .content-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }
    
    .section-header {
        display: flex;
        align-items: flex-start;
        gap: 2rem;
        margin-bottom: 2rem;
        position: relative;
    }
    
    .section-number {
        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(3rem, 6vw, 5rem);
        font-weight: 900;
        color: rgba(212, 175, 55, 0.3);
        line-height: 1;
        flex-shrink: 0;
        min-width: 80px;
        text-align: center;
        filter: drop-shadow(0 0 20px rgba(212, 175, 55, 0.5));
        text-shadow: 0 0 30px rgba(212, 175, 55, 0.4);
    }
    
    .section-title-group {
        flex: 1;
    }
    
    .section-title {
        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 0.5rem;
        line-height: 1.1;
        letter-spacing: -0.02em;
    }
    
    .section-subtitle {
        font-size: 0.875rem;
        font-weight: 500;
        color: rgba(212, 175, 55, 0.8);
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }
    
    .content-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }
    
    .content-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 2rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .content-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, 
            transparent 0%, 
            rgba(212, 175, 55, 0.6) 50%, 
            transparent 100%);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
    }
    
    .content-card:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: rgba(212, 175, 55, 0.4);
        transform: translateY(-4px);
    }
    
    .content-card:hover::before {
        transform: translateX(0);
    }
    
    .content-list {
        list-style: none;
    }
    
    .content-list li {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.5rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
    }
    
    .content-list li:last-child {
        margin-bottom: 0;
    }
    
    .list-marker {
        color: rgba(212, 175, 55, 0.8);
        font-weight: 600;
        flex-shrink: 0;
        margin-top: 0.25rem;
    }
    
    .highlight-box {
        background: linear-gradient(135deg, 
            rgba(212, 175, 55, 0.1) 0%, 
            rgba(5, 150, 105, 0.1) 100%);
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        font-weight: 500;
        color: #ffffff;
        margin-top: 3rem;
        position: relative;
        overflow: hidden;
    }
    
    .highlight-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent 0%, 
            rgba(212, 175, 55, 0.2) 50%, 
            transparent 100%);
        animation: slideIn 3s ease-in-out infinite;
    }
    
    .footer-full {
        width: 100vw;
        margin-left: calc(50% - 50vw);
        background: linear-gradient(135deg, 
            rgba(212, 175, 55, 0.05) 0%, 
            rgba(5, 150, 105, 0.05) 100%);
        border-top: 1px solid rgba(212, 175, 55, 0.2);
        padding: 4rem 0;
        text-align: center;
    }
    
    .footer-content {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
    }
    
    .footer-text {
        font-size: 1.2rem;
        font-weight: 500;
        color: #ffffff;
        margin-bottom: 1rem;
    }
    
    .footer-highlight {
        color: rgba(212, 175, 55, 0.9);
        font-weight: 700;
    }
    
    @media (max-width: 768px) {
        .grid-container {
            grid-template-columns: 1fr;
            gap: 2rem;
            padding: 0 1rem;
        }
        
        .section-content {
            padding: 2rem;
        }
        
        .section-header {
            flex-direction: column;
            gap: 2rem;
            text-align: center;
        }
        
        .section-number {
            min-width: auto;
            font-size: clamp(2rem, 8vw, 3rem);
        }
        
        .content-grid {
            grid-template-columns: 1fr;
        }
        
        .hero-full {
            min-height: 70vh;
            padding: 2rem 1rem;
        }
        
        .hero-title {
            font-size: clamp(2rem, 8vw, 3rem);
        }
        
        .hero-subtitle {
            font-size: clamp(1rem, 4vw, 1.4rem);
        }
        
        .section-e .section-content {
            max-width: 100%;
        }
    }
</style>
@endpush

@section('content')
<!-- Full Width Hero Section -->
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
                filter: none;
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
            background: rgba(0, 0, 0, 0.4);
            z-index: -1;
        "></div>
        
        <div class="hero-content">
            <div class="hero-badge">
                International Halal Economic Awards 2026
            </div>
            <h1 class="hero-title">
                Winner Recognition<br>& Usage Rights
            </h1>
            <p class="hero-subtitle">
                Winners of the International Halal Economic Awards 2026 will receive exceptional global exposure and branding privileges
            </p>
        </div>
    </div>
</div>

<!-- 2-Column Grid Layout -->
<div class="grid-container" style="margin-top: 6rem; margin-bottom: 6rem;">
    
    <!-- Row 1: Section A (Left) + Section B (Right) -->
    <div class="section-a scroll-animate fade-in-left delay-1">
        <div class="section-content">
            <div class="section-header">
                <div class="section-number">A</div>
                <div class="section-title-group">
                    <h2 class="section-title">AWARDS TROPHY & CERTIFICATE</h2>
                    <p class="section-subtitle">Prestigious Recognition of Excellence</p>
                </div>
            </div>
            <div class="content-grid">
                <div class="content-card">
                    <p style="color: rgba(255, 255, 255, 0.9); font-weight: 500; margin-bottom: 1.5rem;">Each recipient will be awarded:</p>
                    <ul class="content-list">
                        <li>
                            <span class="list-marker">•</span>
                            <span>A premium, specially designed trophy</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Official certification of achievement</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section-b scroll-animate fade-in-right delay-2">
        <div class="section-content">
            <div class="section-header">
                <div class="section-number">B</div>
                <div class="section-title-group">
                    <h2 class="section-title">DIGITAL & MEDIA RECOGNITION</h2>
                    <p class="section-subtitle">Global Media Exposure</p>
                </div>
            </div>
            <div class="content-grid">
                <div class="content-card">
                    <p style="color: rgba(255, 255, 255, 0.9); font-weight: 500; margin-bottom: 1.5rem;">Winners will be featured across:</p>
                    <ul class="content-list">
                        <li>
                            <span class="list-marker">•</span>
                            <span>WIED & IHEC official website</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Halal Economy Magazine</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Social media announcements</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Press releases</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Partner media platforms</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2: Section C (Left) + Section D (Right) -->
    <div class="section-c scroll-animate fade-in-left delay-3">
        <div class="section-content">
            <div class="section-header">
                <div class="section-number">C</div>
                <div class="section-title-group">
                    <h2 class="section-title">RIGHTS TO USE THE OFFICIAL WINNER SEAL</h2>
                    <p class="section-subtitle">Exclusive Branding Privileges</p>
                </div>
            </div>
            <div class="content-grid">
                <div class="content-card">
                    <p style="color: rgba(255, 255, 255, 0.9); font-weight: 500; margin-bottom: 1.5rem;">Award recipients may use the International Halal Awards Winner Seal on:</p>
                    <ul class="content-list">
                        <li>
                            <span class="list-marker">•</span>
                            <span>Packaging</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Websites</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Advertising</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Marketing campaigns</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Investor decks</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Trade materials</span>
                        </li>
                    </ul>
                    <div class="highlight-box">
                        "WINNER OF THE INTERNATIONAL HALAL AWARDS 2026 – [CATEGORY]"
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-d scroll-animate fade-in-right delay-4">
        <div class="section-content">
            <div class="section-header">
                <div class="section-number">D</div>
                <div class="section-title-group">
                    <h2 class="section-title">FEATURED CASE LISTING</h2>
                    <p class="section-subtitle">Global Publication Distribution</p>
                </div>
            </div>
            <div class="content-grid">
                <div class="content-card">
                    <p style="color: rgba(255, 255, 255, 0.9); font-weight: 500; margin-bottom: 1.5rem;">Top winners will be showcased in the International Halal Awards Casebook, a global publication distributed to:</p>
                    <ul class="content-list">
                        <li>
                            <span class="list-marker">•</span>
                            <span>Ministries & Government Agencies</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>International Buyers</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Halal Certification Bodies</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Investors</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Industry Councils</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 3: Section E (Full Width) -->
    <div class="section-e scroll-animate scale-in delay-5">
        <div class="section-content">
            <div class="section-header">
                <div class="section-number">E</div>
                <div class="section-title-group">
                    <h2 class="section-title">LONG-TERM RECOGNITION</h2>
                    <p class="section-subtitle">Permanent Hall of Fame</p>
                </div>
            </div>
            <div class="content-grid">
                <div class="content-card">
                    <p style="color: rgba(255, 255, 255, 0.9); font-weight: 500; margin-bottom: 1.5rem;">Winners will remain listed permanently in the:</p>
                    <ul class="content-list">
                        <li>
                            <span class="list-marker">•</span>
                            <span>International Halal Awards Winners Archive</span>
                        </li>
                        <li>
                            <span class="list-marker">•</span>
                            <span>Digital Hall of Fame</span>
                        </li>
                    </ul>
                    <div class="highlight-box">
                        This ensures sustained visibility well beyond the awards event
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Full Width Footer -->
<div class="footer-full">
    <div class="footer-content">
        <p class="footer-text">
            Join the elite winners of <span class="footer-highlight">International Halal Economic Awards 2026</span>
        </p>
    </div>
</div>

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
                // Optional: Stop observing after animation
                scrollObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Initialize animations when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Observe all scroll-animate elements
        const animatedElements = document.querySelectorAll('.scroll-animate');
        animatedElements.forEach(el => {
            scrollObserver.observe(el);
        });

        // Add parallax effect to hero section
        const heroContent = document.querySelector('.hero-content');
        if (heroContent) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallax = scrolled * 0.5;
                heroContent.style.transform = `translateY(${parallax}px)`;
            });
        }

        // Add smooth reveal for highlight boxes
        const highlightBoxes = document.querySelectorAll('.highlight-box');
        const highlightObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 200);
                }
            });
        }, { threshold: 0.5 });

        highlightBoxes.forEach(box => {
            box.style.opacity = '0';
            box.style.transform = 'translateY(20px)';
            box.style.transition = 'all 0.6s ease';
            highlightObserver.observe(box);
        });
    });

    // Add hover effect for content cards
    document.addEventListener('DOMContentLoaded', function() {
        const contentCards = document.querySelectorAll('.content-card');
        contentCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>
@endsection

