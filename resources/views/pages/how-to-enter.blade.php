@extends('layouts.app')

@section('title', 'How To Join')

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
        background: #000000 !important;
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
    
    .steps-section {
        width: 100%;
        position: relative;
        padding: 3rem 0 1rem 0;
        background-image: url('{{ asset("assets/mission2.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        border-bottom: none;
    }
    
    .steps-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        z-index: 0;
    }
    
    .steps-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 1;
    }
    
    .steps-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .step-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.03) 100%);
        border: 1px solid rgba(212, 175, 55, 0.4);
        border-radius: 12px;
        padding: 1.75rem;
        position: relative;
        transition: all 0.3s ease;
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        display: flex;
        flex-direction: column;
        min-height: 280px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }
    
    .step-card:hover {
        transform: translateY(-8px);
        border-color: rgba(212, 175, 55, 0.7);
        box-shadow: 0 12px 35px rgba(212, 175, 55, 0.4);
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.12) 0%, rgba(255, 255, 255, 0.05) 100%);
    }
    
    .step-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--halal-gold), #f4d03f, var(--halal-gold));
        border-radius: 12px 12px 0 0;
    }
    
    .step-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at top right, rgba(212, 175, 55, 0.1) 0%, transparent 50%);
        border-radius: 12px;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .step-card:hover::after {
        opacity: 1;
    }
    
    .step-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.25rem;
    }
    
    .step-number {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 20px;
        height: 20px;
        font-size: 1.2rem;
        color: var(--halal-gold);
        font-weight: 700;
        flex-shrink: 0;
        line-height: 1;
    }
    
    .step-icon-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 20px;
        height: 20px;
        flex-shrink: 0;
        margin-top: 0.1rem;
    }
    
    .step-icon-wrapper svg {
        width: 1.2rem;
        height: 1.2rem;
        stroke: var(--halal-gold);
        stroke-width: 2;
        fill: none;
    }
    
    .step-icon-wrapper i {
        font-size: 1.2rem;
        color: var(--halal-gold);
    }
    
    .step-content-text {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .step-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        color: var(--halal-gold);
        line-height: 1.3;
        margin-bottom: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .step-description {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.85rem;
        line-height: 1.6;
        margin-bottom: 0;
        flex: 1;
    }
    
    .step-details {
        list-style: none;
        margin: 0.75rem 0 0 0;
        padding: 0;
    }
    
    .step-item {
        display: flex;
        align-items: flex-start;
        gap: 0.6rem;
        margin-bottom: 0.5rem;
        padding: 0;
        transition: all 0.2s ease;
    }
    
    .step-item:last-child {
        margin-bottom: 0;
    }
    
    .step-item:hover {
        transform: translateX(3px);
    }
    
    .step-icon {
        color: var(--halal-gold);
        font-size: 0.5rem;
        margin-top: 0.35rem;
        flex-shrink: 0;
    }
    
    .step-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.8rem;
        line-height: 1.5;
    }
    
    .step-text strong {
        color: var(--halal-gold);
        font-weight: 700;
    }
    
    .cta-section {
        text-align: center;
        margin-top: 1rem;
        padding: 0.5rem 2rem 0 2rem;
        border-top: none;
    }
    
    .steps-container {
        border-bottom: none;
    }
    
    .steps-grid {
        border-bottom: none;
    }
    
    .cta-button {
        display: inline-block;
        padding: 1.25rem 3rem;
        background: linear-gradient(135deg, var(--halal-gold), #b8941f);
        color: #000;
        text-decoration: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1.1rem;
        font-family: 'Montserrat', sans-serif;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }
    
    .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
    }
    
    /* Scroll Animations - Only for hero section */
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
    .scroll-animate.delay-6 { transition-delay: 0.6s; }
    
    /* Steps display immediately - no scroll animation */
    .step-card {
        opacity: 1 !important;
        transform: none !important;
    }
    
    /* Responsive Design */
    @media (max-width: 1024px) {
        .steps-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 768px) {
        .steps-container {
            padding: 1.5rem 1rem;
            margin: 2rem auto;
        }
        
        .steps-grid {
            grid-template-columns: 1fr;
            gap: 1.25rem;
        }
        
        .step-card {
            padding: 1.5rem;
            min-height: auto;
        }
        
        .step-header {
            gap: 1rem;
        }
        
        .step-number {
            font-size: 1.1rem;
            min-width: 18px;
            height: 18px;
        }
        
        .step-icon-wrapper {
            min-width: 18px;
            height: 18px;
        }
        
        .step-icon-wrapper svg {
            width: 1rem;
            height: 1rem;
        }
        
        .step-icon-wrapper i {
            font-size: 1rem;
        }
        
        .step-title {
            font-size: 0.95rem;
        }
        
        .step-description {
            font-size: 0.85rem;
        }
        
        .step-text {
            font-size: 0.8rem;
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
                HOW TO JOIN
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                A simple and fully transparent entry process will be used
            </p>
        </div>
    </div>
</div>

<!-- Steps Section -->
<div class="steps-section">
    <div class="steps-container">
        <div class="steps-grid">
    
    <!-- Step 1 -->
    <div class="step-card">
        <div class="step-header">
            <div class="step-number">1</div>
            <div class="step-icon-wrapper">
                <i class="fas fa-list-check"></i>
            </div>
        </div>
        <div class="step-content-text">
            <h2 class="step-title">SELECT CATEGORY</h2>
            <p class="step-description">Participants choose the most relevant award category based on their achievement.</p>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="step-card">
        <div class="step-header">
            <div class="step-number">2</div>
            <div class="step-icon-wrapper">
                <i class="fas fa-user-plus"></i>
            </div>
        </div>
        <div class="step-content-text">
            <h2 class="step-title">REGISTER ONLINE</h2>
            <p class="step-description">Complete the online registration form on the official Awards website.</p>
        </div>
    </div>

    <!-- Step 3 -->
    <div class="step-card">
        <div class="step-header">
            <div class="step-number">3</div>
            <div class="step-icon-wrapper">
                <i class="fas fa-folder-open"></i>
            </div>
        </div>
        <div class="step-content-text">
            <h2 class="step-title">PREPARE SUBMISSION DOCUMENTS</h2>
            <p class="step-description">Each entry must include:</p>
            <ul class="step-details">
                <li class="step-item">
                    <i class="fas fa-circle step-icon"></i>
                    <span class="step-text">Executive summary</span>
                </li>
                <li class="step-item">
                    <i class="fas fa-circle step-icon"></i>
                    <span class="step-text">Achievement narrative</span>
                </li>
                <li class="step-item">
                    <i class="fas fa-circle step-icon"></i>
                    <span class="step-text">Evidence of results</span>
                </li>
                <li class="step-item">
                    <i class="fas fa-circle step-icon"></i>
                    <span class="step-text">Halal certification documentation (if applicable)</span>
                </li>
                <li class="step-item">
                    <i class="fas fa-circle step-icon"></i>
                    <span class="step-text">Supporting media, visuals or data</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Step 4 -->
    <div class="step-card">
        <div class="step-header">
            <div class="step-number">4</div>
            <div class="step-icon-wrapper">
                <i class="fas fa-upload"></i>
            </div>
        </div>
        <div class="step-content-text">
            <h2 class="step-title">UPLOAD SUBMISSION</h2>
            <p class="step-description">Participants submit entry materials through the Awards submission portal.</p>
        </div>
    </div>

    <!-- Step 5 -->
    <div class="step-card">
        <div class="step-header">
            <div class="step-number">5</div>
            <div class="step-icon-wrapper">
                <i class="fas fa-credit-card"></i>
            </div>
        </div>
        <div class="step-content-text">
            <h2 class="step-title">PAYMENT OF ENTRY FEES</h2>
            <p class="step-description">Applicable fees must be settled to confirm entry submission.</p>
        </div>
    </div>

    <!-- Step 6 -->
    <div class="step-card">
        <div class="step-header">
            <div class="step-number">6</div>
            <div class="step-icon-wrapper">
                <i class="fas fa-check-circle"></i>
            </div>
        </div>
        <div class="step-content-text">
            <h2 class="step-title">CONFIRMATION</h2>
            <p class="step-description">Upon successful submission, participants will receive:</p>
            <ul class="step-details">
                <li class="step-item">
                    <i class="fas fa-circle step-icon"></i>
                    <span class="step-text">Submission ID</span>
                </li>
                <li class="step-item">
                    <i class="fas fa-circle step-icon"></i>
                    <span class="step-text">Verification request (if needed)</span>
                </li>
                <li class="step-item">
                    <i class="fas fa-circle step-icon"></i>
                    <span class="step-text">Timeline updates</span>
                </li>
            </ul>
        </div>
    </div>
    
        </div>

        <!-- CTA Section -->
        <div class="cta-section">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeCURjiSDPnTe07wafiEtYrgO1YSytYcXkjtI2sKrfEnoZ-mg/viewform" target="_blank" class="cta-button">Join Now</a>
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

