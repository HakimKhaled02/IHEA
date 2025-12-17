@extends('layouts.app')

@section('title', 'Eligibility Requirements')

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
    
    .eligibility-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem;
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        position: relative;
    }
    
    .eligibility-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 3rem;
        position: relative;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
    }
    
    .eligibility-card:hover {
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
    
    .card-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1));
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--halal-gold);
    }
    
    .card-title {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 800;
        color: #ffffff;
        line-height: 1.2;
    }
    
    .card-content {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    
    .requirements-list {
        list-style: none;
        margin: 0;
    }
    
    .requirement-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .requirement-item:hover {
        background: rgba(255, 255, 255, 0.04);
        transform: translateX(8px);
    }
    
    .requirement-icon {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-top: 0.25rem;
        flex-shrink: 0;
    }
    
    .requirement-text {
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
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .eligibility-container {
            padding: 2rem 1rem;
        }
        
        .eligibility-card {
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
                International Halal Economic Award 2026
            </div>
            <h1 class="hero-title scroll-animate fade-in-up delay-1">
                ELIGIBILITY<br>REQUIREMENTS
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                Ensure your organization meets the criteria to participate in the prestigious International Halal Economic Awards 2026
            </p>
        </div>
    </div>
</div>

<!-- Eligibility Requirements Section -->
<div class="eligibility-container">
    
    <!-- General Eligibility -->
    <div class="eligibility-card scroll-animate fade-in-up delay-1">
        <div class="card-header">
            <div class="card-icon">
                <i class="fas fa-globe"></i>
            </div>
            <h2 class="card-title">General Eligibility</h2>
        </div>
        <p class="card-content">
            All entries must meet the following general requirements to be considered for the International Halal Economic Award 2026:
        </p>
        <ul class="requirements-list">
            <li class="requirement-item">
                <i class="fas fa-check-circle requirement-icon"></i>
                <span class="requirement-text">Organizations, individuals, or projects must be actively operating in the Halal economy</span>
            </li>
            <li class="requirement-item">
                <i class="fas fa-check-circle requirement-icon"></i>
                <span class="requirement-text">Must demonstrate compliance with relevant Halal standards and certifications</span>
            </li>
            <li class="requirement-item">
                <i class="fas fa-check-circle requirement-icon"></i>
                <span class="requirement-text">Must have a track record of at least 12 months of operation (unless specified otherwise)</span>
            </li>
            <li class="requirement-item">
                <i class="fas fa-check-circle requirement-icon"></i>
                <span class="requirement-text">Must be able to provide supporting documentation and evidence of achievements</span>
            </li>
        </ul>
    </div>

    <!-- Category-Specific Requirements -->
    <div class="eligibility-card scroll-animate fade-in-up delay-2">
        <div class="card-header">
            <div class="card-icon">
                <i class="fas fa-list-alt"></i>
            </div>
            <h2 class="card-title">Category-Specific Requirements</h2>
        </div>
        <p class="card-content">
            Each award category may have specific eligibility criteria tailored to its unique focus area. Please review the category descriptions carefully before submitting your entry to ensure your organization meets all requirements.
        </p>
    </div>

    <!-- Documentation Required -->
    <div class="eligibility-card scroll-animate fade-in-up delay-3">
        <div class="card-header">
            <div class="card-icon">
                <i class="fas fa-file-alt"></i>
            </div>
            <h2 class="card-title">Documentation Required</h2>
        </div>
        <ul class="requirements-list">
            <li class="requirement-item">
                <i class="fas fa-file-certificate requirement-icon"></i>
                <span class="requirement-text">Halal certification documents (where applicable)</span>
            </li>
            <li class="requirement-item">
                <i class="fas fa-building requirement-icon"></i>
                <span class="requirement-text">Company registration and business licenses</span>
            </li>
            <li class="requirement-item">
                <i class="fas fa-chart-line requirement-icon"></i>
                <span class="requirement-text">Financial statements or performance metrics</span>
            </li>
            <li class="requirement-item">
                <i class="fas fa-trophy requirement-icon"></i>
                <span class="requirement-text">Supporting materials demonstrating achievements</span>
            </li>
            <li class="requirement-item">
                <i class="fas fa-comment-dots requirement-icon"></i>
                <span class="requirement-text">References or testimonials (optional but recommended)</span>
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

