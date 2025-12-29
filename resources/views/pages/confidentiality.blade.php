@extends('layouts.app')

@section('title', 'Confidentiality & Code of Conduct')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');
    
    :root {
        --halal-green: #059669;
        --halal-dark: #064e3b;
        --halal-gold: #d4af37;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Montserrat', sans-serif;
        background: #000000 !important;
        min-height: 100vh;
        overflow-x: hidden;
    }
    
    html {
        background: #000000 !important;
    }
    
    .main-content-simple {
        background: #000000 !important;
    }
    
    .full-width-section {
        width: 100vw;
        margin-left: calc(50% - 50vw);
        position: relative;
        overflow: hidden;
    }
    
    .hero-full {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4rem 2rem;
        position: relative;
        background: #000000;
        border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        overflow: hidden;
    }
    
    .hero-content {
        text-align: center;
        max-width: 1000px;
        position: relative;
        z-index: 3;
        width: 100%;
        padding: 0 1rem;
    }
    
    .hero-badge {
        display: inline-block;
        padding: 1rem 2rem;
        background: rgba(212, 175, 55, 0.1);
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-radius: 50px;
        color: var(--halal-gold);
        font-weight: 600;
        font-size: 0.875rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin-bottom: 2rem;
        backdrop-filter: blur(10px);
        word-wrap: break-word;
    }
    
    .hero-title {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(2.5rem, 6vw, 5rem);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, #d4af37, #f4e4bc, #d4af37);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: drop-shadow(0 4px 8px rgba(212, 175, 55, 0.3));
    }
    
    .hero-subtitle {
        font-size: clamp(1.2rem, 2.5vw, 1.8rem);
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        font-weight: 400;
        max-width: 800px;
        margin: 0 auto 3rem;
    }
    
    .confidentiality-section {
        width: 100%;
        padding: 4rem 0;
        background-image: url('{{ asset("assets/mission2.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        position: relative;
    }
    
    .confidentiality-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.85);
        z-index: 0;
    }
    
    .confidentiality-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 3rem 2rem;
        position: relative;
        z-index: 1;
    }
    
    .confidentiality-card {
        background: transparent;
        border: none;
        border-radius: 0;
        padding: 0;
        position: relative;
        margin-bottom: 3rem;
        border-left: 4px solid var(--halal-gold);
        padding-left: 2rem;
    }
    
    .confidentiality-card:last-child {
        margin-bottom: 0;
    }
    
    .card-header {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .card-number {
        display: none;
    }
    
    .card-title-group {
        flex: 1;
    }
    
    .card-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: #ffffff;
        line-height: 1.3;
        margin: 0 0 0.5rem 0;
        border-bottom: 2px solid rgba(212, 175, 55, 0.6);
        padding-bottom: 0.5rem;
        display: inline-block;
    }
    
    .card-subtitle {
        color: var(--halal-gold);
        font-weight: 500;
        font-size: 0.875rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin-top: 0.5rem;
    }
    
    .principles-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        margin-top: 1.5rem;
        position: relative;
    }
    
    .principles-column {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    
    .principles-column:first-child {
        padding-right: 1.25rem;
    }
    
    .principles-column:last-child {
        padding-left: 1.25rem;
    }
    
    .principle-section {
        margin-bottom: 0;
    }
    
    .principle-section:last-child {
        margin-bottom: 0;
    }
    
    .principle-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.125rem;
        font-weight: 600;
        color: #ffffff;
        margin: 0 0 0.75rem 0;
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
    }
    
    .principle-letter {
        color: var(--halal-gold);
        font-weight: 700;
        min-width: 1.5rem;
        flex-shrink: 0;
        text-align: right;
    }
    
    .principle-intro {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9375rem;
        margin: 0 0 0.75rem 0;
        padding-left: 2rem;
    }
    
    .principle-text {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.6;
        margin: 0;
        padding-left: 2rem;
    }
    
    .principle-list {
        list-style: none;
        margin: 0;
        padding-left: 2rem;
    }
    
    .principle-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.5rem;
        padding: 0;
        background: transparent;
        border: none;
        transition: none;
    }
    
    .principle-item:last-child {
        margin-bottom: 0;
    }
    
    .principle-item:hover {
        background: transparent;
        transform: none;
    }
    
    .principle-item i {
        color: var(--halal-gold);
        font-size: 0.875rem;
        margin-top: 0.2rem;
        flex-shrink: 0;
        min-width: 0.875rem;
    }
    
    .principle-item span {
        color: rgba(255, 255, 255, 0.85);
        font-weight: 400;
        font-size: 0.9375rem;
        line-height: 1.6;
    }
    
    .conduct-section {
        margin-top: 1.5rem;
    }
    
    .conduct-section-title {
        color: #ffffff;
        font-weight: 600;
        font-size: 1.125rem;
        margin-bottom: 1rem;
        font-family: 'Montserrat', sans-serif;
    }
    
    .conduct-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .conduct-item {
        background: transparent;
        border: none;
        border-radius: 0;
        padding: 0;
        transition: none;
    }
    
    .conduct-item:hover {
        background: transparent;
        transform: none;
    }
    
    .conduct-item h4 {
        color: var(--halal-gold);
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
    }
    
    .conduct-item h4 i {
        color: var(--halal-gold);
        font-size: 1rem;
    }
    
    .conduct-item p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin: 0;
        font-size: 0.875rem;
    }
    
    .confidentiality-list {
        list-style: none;
        margin: 1.5rem 0 0 0;
    }
    
    .confidentiality-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        padding: 0;
        background: transparent;
        border: none;
        border-radius: 0;
        transition: none;
    }
    
    .confidentiality-item:last-child {
        margin-bottom: 0;
    }
    
    .confidentiality-item:hover {
        background: transparent;
        transform: none;
    }
    
    .confidentiality-icon {
        color: var(--halal-gold);
        font-size: 1rem;
        margin-top: 0.15rem;
        flex-shrink: 0;
        min-width: 1rem;
    }
    
    .confidentiality-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.6;
    }
    
    .enforcement-notice {
        background: transparent;
        border: 2px solid rgba(212, 175, 55, 0.3);
        border-left: 4px solid var(--halal-gold);
        border-radius: 0;
        padding: 1.5rem;
        text-align: left;
        color: white;
        margin-top: 2rem;
    }
    
    .enforcement-notice i {
        font-size: 1.5rem;
        color: var(--halal-gold);
        margin-bottom: 0.75rem;
        display: block;
    }
    
    .enforcement-notice h4 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
        font-family: 'Montserrat', sans-serif;
        color: var(--halal-gold);
    }
    
    .enforcement-notice p {
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        font-size: 0.9375rem;
        margin: 0;
    }
    
    .card-content {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 1rem;
        font-size: 0.9375rem;
    }
    
    /* Scroll Animations */
    .scroll-animate {
        opacity: 0;
        transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .scroll-animate.fade-in-up {
        transform: translateY(60px);
    }
    
    .scroll-animate.is-animated {
        opacity: 1;
        transform: translateY(0);
    }
    
    .scroll-animate.delay-1 { transition-delay: 0.1s; }
    .scroll-animate.delay-2 { transition-delay: 0.2s; }
    .scroll-animate.delay-3 { transition-delay: 0.3s; }
    .scroll-animate.delay-4 { transition-delay: 0.4s; }
    
    /* Responsive Design */
    @media (max-width: 1024px) {
        .principles-grid {
            grid-template-columns: 1fr;
        }
        
        .principles-column:first-child {
            padding-right: 0;
        }
        
        .principles-column:last-child {
            padding-left: 0;
        }
        
        .conduct-grid {
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 768px) {
        .confidentiality-container {
            padding: 2rem 1rem;
        }
        
        .confidentiality-card {
            padding-left: 1rem;
            border-left-width: 3px;
        }
        
        .hero-full {
            min-height: 100vh;
            padding: 4rem 1.5rem 3rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-content {
            padding: 0;
        }
        
        .hero-badge {
            padding: 0.75rem 1.5rem;
            font-size: 0.7rem;
            margin-bottom: 1.5rem;
            letter-spacing: 0.08em;
            max-width: 95%;
            word-wrap: break-word;
            text-align: center;
        }
        
        .hero-title {
            font-size: clamp(2.25rem, 6vw, 3.5rem);
            margin-bottom: 1.25rem;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: clamp(1rem, 2.5vw, 1.4rem);
            margin: 0 auto 2rem;
            line-height: 1.6;
            max-width: 100%;
        }
    }
    
    @media (max-width: 480px) {
        .hero-full {
            min-height: 100vh;
            padding: 3.5rem 1rem 2.5rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-content {
            padding: 0;
        }
        
        .hero-badge {
            padding: 0.625rem 1.25rem;
            font-size: 0.65rem;
            margin-bottom: 1.25rem;
            letter-spacing: 0.05em;
            max-width: 95%;
            word-wrap: break-word;
            text-align: center;
        }
        
        .hero-title {
            font-size: clamp(2rem, 6vw, 3rem);
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: clamp(0.95rem, 2.5vw, 1.2rem);
            margin: 0 auto 1.5rem;
            line-height: 1.6;
            max-width: 100%;
        }
        
        .principles-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .principles-column {
            gap: 1.5rem;
        }
        
        .conduct-grid {
            grid-template-columns: 1fr;
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
                International Halal Economic Award 2026
            </div>
            <h1 class="hero-title scroll-animate fade-in-up delay-1">
                CONFIDENTIALITY<br>& CODE OF CONDUCT
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                The International Halal Economic Award 2026 operates under strict confidentiality and ethical governance protocols
            </p>
        </div>
    </div>
</div>

<!-- Confidentiality Section -->
<div class="confidentiality-section">
<div class="confidentiality-container">
    
    <!-- Confidentiality Principles -->
    <div class="confidentiality-card scroll-animate fade-in-up delay-1">
        <div class="card-header">
            <div class="card-title-group">
                <h2 class="card-title">CONFIDENTIALITY PRINCIPLES</h2>
            </div>
        </div>
        
        <div class="principles-grid">
            <!-- Left Column -->
            <div class="principles-column">
                <!-- 1. All Entries Are Treated as Confidential -->
                <div class="principle-section">
                    <h3 class="principle-title">
                        <span class="principle-letter">1.</span>
                        ALL ENTRIES ARE TREATED AS CONFIDENTIAL
                    </h3>
                    <p class="principle-intro">Information submitted will be:</p>
                    <ul class="principle-list">
                        <li class="principle-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Used solely for judging purposes</span>
                        </li>
                        <li class="principle-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Protected from unauthorized sharing</span>
                        </li>
                        <li class="principle-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Securely stored</span>
                        </li>
                        <li class="principle-item">
                            <i class="fas fa-check-circle"></i>
                            <span>No details will be publicly disclosed without written consent.</span>
                        </li>
                    </ul>
                </div>
                
                <!-- 2. Judges Must Sign Confidentiality Agreements -->
                <div class="principle-section">
                    <h3 class="principle-title">
                        <span class="principle-letter">2.</span>
                        JUDGES MUST SIGN CONFIDENTIALITY AGREEMENTS
                    </h3>
                    <p class="principle-intro">All jurors are legally bound to:</p>
                    <ul class="principle-list">
                        <li class="principle-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Maintain confidentiality</span>
                        </li>
                        <li class="principle-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Refrain from discussing submissions</span>
                        </li>
                        <li class="principle-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Avoid retaining copies of materials</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="principles-column">
                <!-- 3. Conflict of Interest Policy -->
                <div class="principle-section">
                    <h3 class="principle-title">
                        <span class="principle-letter">3.</span>
                        CONFLICT OF INTEREST POLICY
                    </h3>
                    <p class="principle-intro">Judges are required to:</p>
                    <ul class="principle-list">
                        <li class="principle-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Declare any affiliation with an entrant</span>
                        </li>
                        <li class="principle-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Decline to evaluate entries where conflict exists</span>
                        </li>
                    </ul>
                </div>
                
                <!-- 4. Intellectual Property Protection -->
                <div class="principle-section">
                    <h3 class="principle-title">
                        <span class="principle-letter">4.</span>
                        INTELLECTUAL PROPERTY PROTECTION
                    </h3>
                    <p class="principle-text">All proprietary content remains the property of the submitting organization</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Code of Conduct -->
    <div class="confidentiality-card scroll-animate fade-in-up delay-2">
        <div class="card-header">
            <div class="card-title-group">
                <h2 class="card-title">CODE OF CONDUCT</h2>
            </div>
        </div>
        <p class="card-content">Entrants must uphold:</p>
        <ul class="confidentiality-list">
            <li class="confidentiality-item">
                <i class="fas fa-check-circle confidentiality-icon"></i>
                <span class="confidentiality-text">Honesty in reporting achievements</span>
            </li>
            <li class="confidentiality-item">
                <i class="fas fa-check-circle confidentiality-icon"></i>
                <span class="confidentiality-text">Transparency in halal practices</span>
            </li>
            <li class="confidentiality-item">
                <i class="fas fa-check-circle confidentiality-icon"></i>
                <span class="confidentiality-text">Ethical behavior</span>
            </li>
            <li class="confidentiality-item">
                <i class="fas fa-check-circle confidentiality-icon"></i>
                <span class="confidentiality-text">Accurate representation of results</span>
            </li>
        </ul>
    </div>
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

        // Add parallax effect to hero section
        const heroContent = document.querySelector('.hero-content');
        if (heroContent) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallax = scrolled * 0.5;
                heroContent.style.transform = `translateY(${parallax}px)`;
            });
        }
    });
</script>
@endsection
