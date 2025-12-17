@extends('layouts.app')

@section('title', 'Confidentiality & Code of Conduct')

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
    
    .confidentiality-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem;
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        position: relative;
    }
    
    .confidentiality-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 3rem;
        position: relative;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
    }
    
    .confidentiality-card:hover {
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
    
    .principle-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }
    
    .principle-item {
        display: flex;
        align-items: center;
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .principle-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.3);
        transform: translateX(8px);
    }
    
    .principle-item i {
        color: var(--halal-gold);
        font-size: 1.5rem;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    .principle-item span {
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
    }
    
    .conduct-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
    }
    
    .conduct-item {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 2rem;
        transition: all 0.3s ease;
    }
    
    .conduct-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.3);
        transform: translateY(-4px);
    }
    
    .conduct-item h4 {
        color: white;
        font-weight: 600;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-family: 'Space Grotesk', sans-serif;
    }
    
    .conduct-item h4 i {
        color: var(--halal-gold);
        font-size: 1.2rem;
    }
    
    .conduct-item p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin: 0;
    }
    
    .confidentiality-list {
        list-style: none;
        margin: 2rem 0;
    }
    
    .confidentiality-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .confidentiality-item:hover {
        background: rgba(255, 255, 255, 0.04);
        transform: translateX(8px);
    }
    
    .confidentiality-icon {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-top: 0.25rem;
        flex-shrink: 0;
    }
    
    .confidentiality-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.9);
    }
    
    .enforcement-notice {
        background: linear-gradient(135deg, rgba(5, 150, 105, 0.1), rgba(6, 78, 59, 0.1));
        border: 1px solid rgba(5, 150, 105, 0.3);
        border-radius: 15px;
        padding: 2.5rem;
        text-align: center;
        color: white;
        margin-top: 2rem;
    }
    
    .enforcement-notice i {
        font-size: 3rem;
        color: var(--halal-gold);
        margin-bottom: 1rem;
    }
    
    .enforcement-notice h4 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        font-family: 'Space Grotesk', sans-serif;
    }
    
    .enforcement-notice p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        font-size: 1.1rem;
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
    @media (max-width: 768px) {
        .confidentiality-container {
            padding: 2rem 1rem;
        }
        
        .confidentiality-card {
            padding: 2rem;
        }
        
        .hero-full {
            min-height: 70vh;
            padding: 2rem 1rem;
        }
        
        .principle-grid {
            grid-template-columns: 1fr;
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
                The International Halal Economic Awards 2026 operates under strict confidentiality and ethical governance protocols
            </p>
        </div>
    </div>
</div>

<!-- Confidentiality Section -->
<div class="confidentiality-container">
    
    <!-- Confidentiality Principles -->
    <div class="confidentiality-card scroll-animate fade-in-up delay-1">
        <div class="card-header">
            <div class="card-number">A</div>
            <div class="card-title-group">
                <h2 class="card-title">CONFIDENTIALITY PRINCIPLES</h2>
                <p class="card-subtitle">Protecting Information Integrity</p>
            </div>
        </div>
        <p class="card-content" style="color: rgba(255, 255, 255, 0.8); line-height: 1.6; margin-bottom: 2rem;">
            All participants, judges, and organizers must adhere to:
        </p>
        <div class="principle-grid">
            <div class="principle-item">
                <i class="fas fa-lock"></i>
                <span>Non-disclosure of submission details</span>
            </div>
            <div class="principle-item">
                <i class="fas fa-user-secret"></i>
                <span>Protection of sensitive business information</span>
            </div>
            <div class="principle-item">
                <i class="fas fa-eye-slash"></i>
                <span>Anonymous evaluation process</span>
            </div>
            <div class="principle-item">
                <i class="fas fa-shield-alt"></i>
                <span>Secure data handling protocols</span>
            </div>
            <div class="principle-item">
                <i class="fas fa-file-contract"></i>
                <span>Legal confidentiality agreements</span>
            </div>
            <div class="principle-item">
                <i class="fas fa-database"></i>
                <span>Encrypted storage systems</span>
            </div>
        </div>
    </div>

    <!-- Code of Conduct -->
    <div class="confidentiality-card scroll-animate fade-in-up delay-2">
        <div class="card-header">
            <div class="card-number">B</div>
            <div class="card-title-group">
                <h2 class="card-title">CODE OF CONDUCT</h2>
                <p class="card-subtitle">Professional Standards & Ethics</p>
            </div>
        </div>
        <div class="space-y-6">
            <div>
                <h4 class="text-white font-semibold mb-3" style="font-size: 1.25rem;">For Participants</h4>
                <div class="conduct-grid">
                    <div class="conduct-item">
                        <h4><i class="fas fa-certificate"></i>Authenticity</h4>
                        <p>Submit only accurate and verifiable information</p>
                    </div>
                    <div class="conduct-item">
                        <h4><i class="fas fa-handshake"></i>Professionalism</h4>
                        <p>Maintain respectful communication throughout</p>
                    </div>
                    <div class="conduct-item">
                        <h4><i class="fas fa-balance-scale"></i>Fair Play</h4>
                        <p>Accept decisions with grace and dignity</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h4 class="text-white font-semibold mb-3" style="font-size: 1.25rem;">For Judges</h4>
                <div class="conduct-grid">
                    <div class="conduct-item">
                        <h4><i class="fas fa-ban"></i>Impartiality</h4>
                        <p>Evaluate based solely on merit and criteria</p>
                    </div>
                    <div class="conduct-item">
                        <h4><i class="fas fa-eye"></i>Objectivity</h4>
                        <p>Remove personal bias from evaluation</p>
                    </div>
                    <div class="conduct-item">
                        <h4><i class="fas fa-comments"></i>Confidentiality</h4>
                        <p>Never discuss evaluations with others</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enforcement -->
    <div class="confidentiality-card scroll-animate fade-in-up delay-3">
        <div class="card-header">
            <div class="card-number">C</div>
            <div class="card-title-group">
                <h2 class="card-title">ENFORCEMENT & COMPLIANCE</h2>
                <p class="card-subtitle">Ensuring Standards Are Met</p>
            </div>
        </div>
        <ul class="confidentiality-list">
            <li class="confidentiality-item">
                <i class="fas fa-clipboard-check confidentiality-icon"></i>
                <span class="confidentiality-text">Regular audits of confidentiality protocols</span>
            </li>
            <li class="confidentiality-item">
                <i class="fas fa-user-shield confidentiality-icon"></i>
                <span class="confidentiality-text">Independent compliance monitoring</span>
            </li>
            <li class="confidentiality-item">
                <i class="fas fa-flag confidentiality-icon"></i>
                <span class="confidentiality-text">Clear reporting mechanisms for violations</span>
            </li>
            <li class="confidentiality-item">
                <i class="fas fa-search confidentiality-icon"></i>
                <span class="confidentiality-text">Swift investigation of breaches</span>
            </li>
            <li class="confidentiality-item">
                <i class="fas fa-gavel confidentiality-icon"></i>
                <span class="confidentiality-text">Consistent application of penalties</span>
            </li>
        </ul>
        
        <div class="enforcement-notice">
            <i class="fas fa-exclamation-triangle"></i>
            <h4>Strict Enforcement</h4>
            <p>Violation of confidentiality agreements or code of conduct may result in immediate disqualification and potential legal action</p>
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
