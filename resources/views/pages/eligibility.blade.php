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
        max-width: 1400px;
        margin: 0 auto;
        padding: 4rem 2rem;
        position: relative;
        background-image: url('{{ asset("assets/aboutpage1.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        border-radius: 20px;
        overflow: hidden;
    }
    
    .eligibility-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.3);
        z-index: 0;
    }
    
    .eligibility-cards-wrapper {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        margin-top: 2rem;
        position: relative;
        z-index: 1;
    }
    
    
    .eligibility-card {
        background: rgba(0, 0, 0, 0.6);
        border: 2px solid rgba(212, 175, 55, 0.4);
        border-left: 4px solid #d4af37;
        border-radius: 12px;
        padding: 2rem;
        position: relative;
        box-shadow: 0 4px 20px rgba(212, 175, 55, 0.2);
        backdrop-filter: blur(10px);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
    }
    
    .eligibility-card:hover {
        border-color: rgba(212, 175, 55, 0.7);
        box-shadow: 0 8px 30px rgba(212, 175, 55, 0.3);
        transform: translateY(-4px);
    }
    
    .card-header {
        margin-bottom: 1.5rem;
        position: relative;
    }
    
    .section-icon {
        font-size: 2rem;
        color: #d4af37;
        margin-bottom: 0.75rem;
        display: block;
        filter: drop-shadow(0 0 15px rgba(212, 175, 55, 0.5));
    }
    
    .section-title {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(1.5rem, 2.5vw, 2rem);
        font-weight: 700;
        color: #ffffff;
        margin: 0;
        position: relative;
        line-height: 1.3;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -0.5rem;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #d4af37, transparent);
        border-radius: 2px;
    }
    
    .requirements-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 0.75rem;
        flex: 1;
    }
    
    .requirement-item {
        position: relative;
        padding: 0.75rem 1rem;
        background: rgba(212, 175, 55, 0.05);
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 8px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .requirement-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.4);
        transform: translateX(4px);
    }
    
    .requirement-icon {
        color: #d4af37;
        font-size: 1rem;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }
    
    .requirement-item:hover .requirement-icon {
        transform: scale(1.15);
    }
    
    .requirement-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.9rem;
        line-height: 1.5;
        margin: 0;
        font-weight: 400;
    }
    
    .rules-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        flex: 1;
    }
    
    .rule-item {
        position: relative;
        padding: 0.75rem 1rem;
        padding-left: 2.5rem;
        background: rgba(212, 175, 55, 0.05);
        border-left: 3px solid rgba(212, 175, 55, 0.4);
        border-radius: 6px;
        transition: all 0.3s ease;
    }
    
    .rule-item::before {
        content: '→';
        position: absolute;
        left: 0.75rem;
        top: 50%;
        transform: translateY(-50%);
        color: #d4af37;
        font-size: 1rem;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    
    .rule-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-left-color: #d4af37;
        transform: translateX(4px);
    }
    
    .rule-item:hover::before {
        transform: translateY(-50%) translateX(2px);
        color: #f4e4bc;
    }
    
    .rule-text {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.9rem;
        line-height: 1.6;
        margin: 0;
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
    @media (max-width: 968px) {
        .eligibility-cards-wrapper {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .eligibility-container {
            padding: 3rem 1.5rem;
            background-attachment: scroll;
        }
        
        .eligibility-card {
            padding: 1.5rem;
        }
        
        .card-header {
            margin-bottom: 1.25rem;
        }
        
        .section-icon {
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
        }
        
        .requirement-item,
        .rule-item {
            padding: 0.65rem 0.85rem;
        }
        
        .rule-item {
            padding-left: 2.25rem;
        }
        
        .rule-item::before {
            left: 0.65rem;
            font-size: 0.9rem;
        }
        
        .requirement-text,
        .rule-text {
            font-size: 0.85rem;
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
                Discover who can participate and the requirements to enter the prestigious International Halal Awards 2026
            </p>
        </div>
    </div>
</div>

<!-- Eligibility Requirements Section -->
<div class="eligibility-container">
    <div class="eligibility-cards-wrapper">
        
        <!-- Who Can Apply Card -->
        <div class="eligibility-card scroll-animate fade-in-up delay-1">
            <div class="card-header">
                <h2 class="section-title">The International Halal Awards 2026 is open to:</h2>
            </div>
            <div class="requirements-grid">
                <div class="requirement-item">
                    <i class="fas fa-building requirement-icon"></i>
                    <span class="requirement-text">Corporations</span>
                </div>
                <div class="requirement-item">
                    <i class="fas fa-store requirement-icon"></i>
                    <span class="requirement-text">SMEs</span>
                </div>
                <div class="requirement-item">
                    <i class="fas fa-landmark requirement-icon"></i>
                    <span class="requirement-text">Government agencies</span>
                </div>
                <div class="requirement-item">
                    <i class="fas fa-handshake requirement-icon"></i>
                    <span class="requirement-text">Cooperatives</span>
                </div>
                <div class="requirement-item">
                    <i class="fas fa-rocket requirement-icon"></i>
                    <span class="requirement-text">Startups and innovators</span>
                </div>
                <div class="requirement-item">
                    <i class="fas fa-hands-helping requirement-icon"></i>
                    <span class="requirement-text">NGOs and community organizations</span>
                </div>
                <div class="requirement-item">
                    <i class="fas fa-globe requirement-icon"></i>
                    <span class="requirement-text">International entities involved in Halal markets</span>
                </div>
            </div>
        </div>

        <!-- Eligibility Rules Card -->
        <div class="eligibility-card scroll-animate fade-in-up delay-2">
            <div class="card-header">
                <h2 class="section-title">Eligibility Rules</h2>
            </div>
            <div class="rules-list">
                <div class="rule-item">
                    <span class="rule-text">Entries must demonstrate clear Halal relevance, compliance or impact</span>
                </div>
                <div class="rule-item">
                    <span class="rule-text">Submitted programmes or achievements must be active within 2023–2026</span>
                </div>
                <div class="rule-item">
                    <span class="rule-text">Organizations may enter multiple categories</span>
                </div>
                <div class="rule-item">
                    <span class="rule-text">Evidence of Halal certification is required for categories involving food, cosmetics, pharmaceuticals or supply chains</span>
                </div>
                <div class="rule-item">
                    <span class="rule-text">Joint entries are allowed where collaboration is essential to the results</span>
                </div>
                <div class="rule-item">
                    <span class="rule-text">Each entry must comply with the Awards' documentation and verification requirements</span>
                </div>
            </div>
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

