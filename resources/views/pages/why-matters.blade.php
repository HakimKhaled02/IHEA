@extends('layouts.app')

@section('title', 'Why The International Halal Awards Matter')

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
        background: radial-gradient(ellipse at center, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
    }
    
    .hero-content {
        text-align: center;
        max-width: 1000px;
        position: relative;
        z-index: 2;
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
    
    .matters-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem;
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        position: relative;
    }
    
    .matter-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 3rem;
        position: relative;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
    }
    
    .matter-card:hover {
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
        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 800;
        color: #ffffff;
        line-height: 1.2;
    }
    
    .card-content {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
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
        .matters-container {
            padding: 2rem 1rem;
        }
        
        .matter-card {
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
        <div class="hero-content">
            <div class="hero-badge scroll-animate fade-in-up">
                International Halal Awards 2026
            </div>
            <h1 class="hero-title scroll-animate fade-in-up delay-1">
                WHY THE INTERNATIONAL<br>HALAL AWARDS MATTER
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                The International Halal Awards serve as a crucial platform for recognizing and celebrating excellence in an industry that represents one of the fastest-growing economic sectors globally
            </p>
        </div>
    </div>
</div>

<!-- Why Matters Section -->
<div class="matters-container">
    
    <!-- Global Impact -->
    <div class="matter-card scroll-animate fade-in-up delay-1">
        <div class="card-header">
            <div class="card-icon">
                <i class="fas fa-globe-americas"></i>
            </div>
            <h2 class="card-title">Global Impact</h2>
        </div>
        <p class="card-content">
            The Halal economy spans multiple industries including food & beverage, pharmaceuticals, cosmetics, finance, tourism, and technology. Recognizing excellence in these sectors drives innovation and sets new benchmarks for quality and compliance.
        </p>
    </div>

    <!-- Industry Recognition -->
    <div class="matter-card scroll-animate fade-in-up delay-2">
        <div class="card-header">
            <div class="card-icon">
                <i class="fas fa-award"></i>
            </div>
            <h2 class="card-title">Industry Recognition</h2>
        </div>
        <p class="card-content">
            Winning an International Halal Award provides unparalleled credibility and recognition, opening doors to new markets, partnerships, and opportunities for growth.
        </p>
    </div>

    <!-- Network Building -->
    <div class="matter-card scroll-animate fade-in-up delay-3">
        <div class="card-header">
            <div class="card-icon">
                <i class="fas fa-users"></i>
            </div>
            <h2 class="card-title">Network Building</h2>
        </div>
        <p class="card-content">
            The Awards bring together industry leaders, policymakers, investors, and innovators, creating valuable networking opportunities that can transform businesses.
        </p>
    </div>

    <!-- Setting Standards -->
    <div class="matter-card scroll-animate fade-in-up delay-4">
        <div class="card-header">
            <div class="card-icon">
                <i class="fas fa-clipboard-check"></i>
            </div>
            <h2 class="card-title">Setting Standards</h2>
        </div>
        <p class="card-content">
            By celebrating best practices, the Awards encourage continuous improvement and help establish higher standards across the Halal industry.
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

