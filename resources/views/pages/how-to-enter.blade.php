@extends('layouts.app')

@section('title', 'How To Join?')

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
    
    .steps-container {
        max-width: 1100px;
        margin: 2.5rem auto;
        padding: 2.5rem 2rem;
        position: relative;
        background: #000000;
    }
    
    .step-card {
        background: #ffffff;
        position: relative;
        padding: 1.75rem 2rem;
        margin-bottom: 0;
        display: flex;
        align-items: center;
        gap: 2rem;
        transition: all 0.3s ease;
        border: 2px solid #ffffff;
        clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), 50% 100%, 0 calc(100% - 20px));
    }
    
    .step-card:not(:first-child) {
        clip-path: polygon(0 20px, 50% 0, 100% 20px, 100% calc(100% - 20px), 50% 100%, 0 calc(100% - 20px));
        margin-top: -20px;
    }
    
    .step-card:last-child {
        clip-path: polygon(0 20px, 50% 0, 100% 20px, 100% 100%, 0 100%);
        margin-bottom: 0;
    }
    
    .step-card:nth-child(odd) {
        background: #ffffff;
        border-color: #ffffff;
    }
    
    .step-card:nth-child(even) {
        background: #000000;
        border-color: #ffffff;
    }
    
    .step-card:hover {
        transform: scale(1.01);
        box-shadow: 0 4px 16px rgba(255, 255, 255, 0.2);
    }
    
    .step-content-wrapper {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 2rem;
    }
    
    .step-content-text {
        flex: 1;
        color: #000000;
        font-size: 0.9rem;
        line-height: 1.6;
    }
    
    .step-card:nth-child(even) .step-content-text {
        color: #ffffff;
    }
    
    .step-number-wrapper {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-shrink: 0;
    }
    
    .step-icon-plain {
        font-size: 1.75rem;
        color: #d4af37;
        flex-shrink: 0;
    }
    
    .step-number-large {
        font-family: 'Montserrat', sans-serif;
        font-size: 3rem;
        font-weight: 300;
        color: #000000;
        line-height: 1;
        letter-spacing: -0.05em;
    }
    
    .step-card:nth-child(even) .step-number-large {
        color: #ffffff;
    }
    
    .step-card:nth-child(odd) .step-content-wrapper {
        flex-direction: row;
    }
    
    .step-card:nth-child(even) .step-content-wrapper {
        flex-direction: row-reverse;
    }
    
    .step-card:nth-child(odd) .step-number-wrapper {
        order: 2;
    }
    
    .step-card:nth-child(even) .step-number-wrapper {
        order: 0;
    }
    
    .step-title {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(1.1rem, 2vw, 1.3rem);
        font-weight: 700;
        color: #d4af37;
        line-height: 1.3;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .step-description {
        color: #666666;
        font-size: 0.85rem;
        line-height: 1.6;
    }
    
    .step-card:nth-child(even) .step-description {
        color: rgba(255, 255, 255, 0.85);
    }
    
    .step-details {
        list-style: none;
        margin: 1rem 0 0 0;
        padding: 0;
    }
    
    .step-item {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
        padding: 0;
        transition: all 0.2s ease;
    }
    
    .step-item:hover {
        transform: translateX(3px);
    }
    
    .step-icon {
        color: #d4af37;
        font-size: 0.75rem;
        margin-top: 0.25rem;
        flex-shrink: 0;
    }
    
    .step-text {
        flex: 1;
        color: #000000;
        font-size: 0.8rem;
        line-height: 1.5;
    }
    
    .step-card:nth-child(even) .step-text {
        color: rgba(255, 255, 255, 0.9);
    }
    
    .step-text strong {
        color: #d4af37;
        font-weight: 700;
    }
    
    .cta-section {
        text-align: center;
        margin-top: 2.5rem;
        padding: 2rem;
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
    @media (max-width: 768px) {
        .steps-container {
            padding: 2rem 1.5rem;
            margin: 2rem auto;
        }
        
        .step-card {
            padding: 1.5rem 1.25rem;
            flex-direction: column;
            gap: 1.25rem;
            clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), 50% 100%, 0 calc(100% - 20px));
        }
        
        .step-card:not(:first-child) {
            clip-path: polygon(0 20px, 50% 0, 100% 20px, 100% calc(100% - 20px), 50% 100%, 0 calc(100% - 20px));
            margin-top: -20px;
        }
        
        .step-card:last-child {
            clip-path: polygon(0 20px, 50% 0, 100% 20px, 100% 100%, 0 100%);
        }
        
        .step-card:nth-child(odd) .step-content-wrapper,
        .step-card:nth-child(even) .step-content-wrapper {
            flex-direction: column;
            gap: 1rem;
        }
        
        .step-number-wrapper {
            order: 0 !important;
            justify-content: center;
        }
        
        .step-icon-plain {
            font-size: 1.5rem;
        }
        
        .step-number-large {
            font-size: 2.5rem;
        }
        
        .step-content-text {
            text-align: center;
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
                HOW TO JOIN?
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                A simple and fully transparent entry process will be used
            </p>
        </div>
    </div>
</div>

<!-- Steps Section -->
<div class="steps-container">
    
    <!-- Step 1 -->
    <div class="step-card">
        <div class="step-content-wrapper">
            <div class="step-content-text">
                <h2 class="step-title">SELECT CATEGORY</h2>
                <p class="step-description">Participants choose the most relevant award category based on their achievement.</p>
            </div>
            <div class="step-number-wrapper">
                <i class="fas fa-list-check step-icon-plain"></i>
                <div class="step-number-large">STEP 1</div>
            </div>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="step-card">
        <div class="step-content-wrapper">
            <div class="step-content-text">
                <h2 class="step-title">REGISTER ONLINE</h2>
                <p class="step-description">Complete the online registration form on the official Awards website.</p>
            </div>
            <div class="step-number-wrapper">
                <i class="fas fa-user-plus step-icon-plain"></i>
                <div class="step-number-large">STEP 2</div>
            </div>
        </div>
    </div>

    <!-- Step 3 -->
    <div class="step-card">
        <div class="step-content-wrapper">
            <div class="step-content-text">
                <h2 class="step-title">PREPARE SUBMISSION DOCUMENTS</h2>
                <p class="step-description">Each entry must include:</p>
                <ul class="step-details">
                    <li class="step-item">
                        <i class="fas fa-circle step-icon" style="font-size: 0.4rem;"></i>
                        <span class="step-text">Executive summary</span>
                    </li>
                    <li class="step-item">
                        <i class="fas fa-circle step-icon" style="font-size: 0.4rem;"></i>
                        <span class="step-text">Achievement narrative</span>
                    </li>
                    <li class="step-item">
                        <i class="fas fa-circle step-icon" style="font-size: 0.4rem;"></i>
                        <span class="step-text">Evidence of results</span>
                    </li>
                    <li class="step-item">
                        <i class="fas fa-circle step-icon" style="font-size: 0.4rem;"></i>
                        <span class="step-text">Halal certification documentation (if applicable)</span>
                    </li>
                    <li class="step-item">
                        <i class="fas fa-circle step-icon" style="font-size: 0.4rem;"></i>
                        <span class="step-text">Supporting media, visuals or data</span>
                    </li>
                </ul>
            </div>
            <div class="step-number-wrapper">
                <i class="fas fa-folder-open step-icon-plain"></i>
                <div class="step-number-large">STEP 3</div>
            </div>
        </div>
    </div>

    <!-- Step 4 -->
    <div class="step-card">
        <div class="step-content-wrapper">
            <div class="step-content-text">
                <h2 class="step-title">UPLOAD SUBMISSION</h2>
                <p class="step-description">Participants submit entry materials through the Awards submission portal.</p>
            </div>
            <div class="step-number-wrapper">
                <i class="fas fa-upload step-icon-plain"></i>
                <div class="step-number-large">STEP 4</div>
            </div>
        </div>
    </div>

    <!-- Step 5 -->
    <div class="step-card">
        <div class="step-content-wrapper">
            <div class="step-content-text">
                <h2 class="step-title">PAYMENT OF ENTRY FEES</h2>
                <p class="step-description">Applicable fees must be settled to confirm entry submission.</p>
            </div>
            <div class="step-number-wrapper">
                <i class="fas fa-credit-card step-icon-plain"></i>
                <div class="step-number-large">STEP 5</div>
            </div>
        </div>
    </div>

    <!-- Step 6 -->
    <div class="step-card">
        <div class="step-content-wrapper">
            <div class="step-content-text">
                <h2 class="step-title">CONFIRMATION</h2>
                <p class="step-description">Upon successful submission, participants will receive:</p>
                <ul class="step-details">
                    <li class="step-item">
                        <i class="fas fa-circle step-icon" style="font-size: 0.4rem;"></i>
                        <span class="step-text"><strong>A.</strong> Submission ID</span>
                    </li>
                    <li class="step-item">
                        <i class="fas fa-circle step-icon" style="font-size: 0.4rem;"></i>
                        <span class="step-text"><strong>B.</strong> Verification request (if needed)</span>
                    </li>
                    <li class="step-item">
                        <i class="fas fa-circle step-icon" style="font-size: 0.4rem;"></i>
                        <span class="step-text"><strong>C.</strong> Timeline updates</span>
                    </li>
                </ul>
            </div>
            <div class="step-number-wrapper">
                <i class="fas fa-check-circle step-icon-plain"></i>
                <div class="step-number-large">STEP 6</div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeCURjiSDPnTe07wafiEtYrgO1YSytYcXkjtI2sKrfEnoZ-mg/viewform" target="_blank" class="cta-button">Join Now</a>
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

