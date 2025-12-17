@extends('layouts.app')

@section('title', 'Judging Criteria')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700;800;900&display=swap');
    
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
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #0a0a0a 0%, #064e3b 50%, #0a0a0a 100%);
        min-height: 100vh;
        overflow-x: hidden;
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
    }
    
    .hero-title {
        font-family: 'Space Grotesk', sans-serif;
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
    
    .criteria-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem;
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        position: relative;
    }
    
    .criteria-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 3rem;
        position: relative;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
    }
    
    .criteria-card:hover {
        transform: translateY(-12px);
        border-color: rgba(212, 175, 55, 0.4);
        box-shadow: 0 25px 80px rgba(212, 175, 55, 0.3);
    }
    
    .card-header {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .card-number {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1));
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Space Grotesk', sans-serif;
        font-size: 1.5rem;
        font-weight: 900;
        color: var(--halal-gold);
        flex-shrink: 0;
    }
    
    .card-title-group {
        flex: 1;
    }
    
    .card-title {
        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 800;
        color: #ffffff;
        line-height: 1.2;
        margin-bottom: 0.5rem;
    }
    
    .card-subtitle {
        color: var(--halal-gold);
        font-weight: 500;
        font-size: 0.875rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }
    
    .card-content {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    
    .criteria-list {
        list-style: none;
        margin: 0;
    }
    
    .criteria-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .criteria-item:hover {
        background: rgba(255, 255, 255, 0.04);
        transform: translateX(8px);
    }
    
    .criteria-icon {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-top: 0.25rem;
        flex-shrink: 0;
    }
    
    .criteria-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.9);
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
    .scroll-animate.delay-5 { transition-delay: 0.5s; }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .criteria-container {
            padding: 2rem 1rem;
        }
        
        .criteria-card {
            padding: 2rem;
        }
        
        .hero-full {
            min-height: 70vh;
            padding: 2rem 1rem;
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
                International Halal Economic Awards 2026
            </div>
            <h1 class="hero-title scroll-animate fade-in-up delay-1">
                JUDGING<br>CRITERIA
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                The Awards evaluate performance using a comprehensive multi-dimensional scoring system tailored to Halal ethics, industry excellence, and global impact
            </p>
        </div>
    </div>
</div>

<!-- Criteria Section -->
<div class="criteria-container">
    
    <!-- Halal Integrity & Compliance -->
    <div class="criteria-card scroll-animate fade-in-up delay-1">
        <div class="card-header">
            <div class="card-number">01</div>
            <div class="card-title-group">
                <h2 class="card-title">HALAL INTEGRITY & COMPLIANCE</h2>
                <p class="card-subtitle">WEIGHT: 25%</p>
            </div>
        </div>
        <ul class="criteria-list">
            <li class="criteria-item">
                <i class="fas fa-check-circle criteria-icon"></i>
                <span class="criteria-text">Alignment with recognized Halal standards</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-check-circle criteria-icon"></i>
                <span class="criteria-text">Transparency in certification and supply chain</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-check-circle criteria-icon"></i>
                <span class="criteria-text">Ethical and Shariah-compliant practices</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-check-circle criteria-icon"></i>
                <span class="criteria-text">Traceability & risk management</span>
            </li>
        </ul>
    </div>

    <!-- Innovation & Transformation -->
    <div class="criteria-card scroll-animate fade-in-up delay-2">
        <div class="card-header">
            <div class="card-number">02</div>
            <div class="card-title-group">
                <h2 class="card-title">INNOVATION & TRANSFORMATION</h2>
                <p class="card-subtitle">WEIGHT: 20%</p>
            </div>
        </div>
        <ul class="criteria-list">
            <li class="criteria-item">
                <i class="fas fa-lightbulb criteria-icon"></i>
                <span class="criteria-text">Introduction of new technologies, processes, or business models</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-palette criteria-icon"></i>
                <span class="criteria-text">Creativity in solving industry challenges</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-users criteria-icon"></i>
                <span class="criteria-text">Enhancements to user or stakeholder experience</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-rocket criteria-icon"></i>
                <span class="criteria-text">Pioneering approaches in Halal markets</span>
            </li>
        </ul>
    </div>

    <!-- Market Performance & Impact -->
    <div class="criteria-card scroll-animate fade-in-up delay-3">
        <div class="card-header">
            <div class="card-number">03</div>
            <div class="card-title-group">
                <h2 class="card-title">MARKET PERFORMANCE & IMPACT</h2>
                <p class="card-subtitle">WEIGHT: 20%</p>
            </div>
        </div>
        <ul class="criteria-list">
            <li class="criteria-item">
                <i class="fas fa-chart-line criteria-icon"></i>
                <span class="criteria-text">Measurable business outcomes</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-dollar-sign criteria-icon"></i>
                <span class="criteria-text">Revenue or export growth</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-globe criteria-icon"></i>
                <span class="criteria-text">Market expansion or penetration</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-trophy criteria-icon"></i>
                <span class="criteria-text">Contribution to industry competitiveness</span>
            </li>
        </ul>
    </div>

    <!-- Sustainability & ESG Contribution -->
    <div class="criteria-card scroll-animate fade-in-up delay-4">
        <div class="card-header">
            <div class="card-number">04</div>
            <div class="card-title-group">
                <h2 class="card-title">SUSTAINABILITY & ESG CONTRIBUTION</h2>
                <p class="card-subtitle">WEIGHT: 15%</p>
            </div>
        </div>
        <ul class="criteria-list">
            <li class="criteria-item">
                <i class="fas fa-leaf criteria-icon"></i>
                <span class="criteria-text">Environmental stewardship</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-hands-helping criteria-icon"></i>
                <span class="criteria-text">Social impact and community development</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-balance-scale criteria-icon"></i>
                <span class="criteria-text">Responsible governance practices</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-infinity criteria-icon"></i>
                <span class="criteria-text">Long-term positive outcomes</span>
            </li>
        </ul>
    </div>

    <!-- Strategic Execution & Effectiveness -->
    <div class="criteria-card scroll-animate fade-in-up delay-5">
        <div class="card-header">
            <div class="card-number">05</div>
            <div class="card-title-group">
                <h2 class="card-title">STRATEGIC EXECUTION & EFFECTIVENESS</h2>
                <p class="card-subtitle">WEIGHT: 20%</p>
            </div>
        </div>
        <ul class="criteria-list">
            <li class="criteria-item">
                <i class="fas fa-bullseye criteria-icon"></i>
                <span class="criteria-text">Clarity of objectives</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-chess criteria-icon"></i>
                <span class="criteria-text">Strength of strategy</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-cogs criteria-icon"></i>
                <span class="criteria-text">Quality of implementation</span>
            </li>
            <li class="criteria-item">
                <i class="fas fa-flag-checkered criteria-icon"></i>
                <span class="criteria-text">Evidence of success against goals</span>
            </li>
        </ul>
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
