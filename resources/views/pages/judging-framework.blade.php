@extends('layouts.app')

@section('title', 'Judging Framework & Standards')

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
    
    .framework-section {
        width: 100%;
        padding: 4rem 0;
        background: #000000;
        position: relative;
    }
    
    .framework-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 3rem 2rem;
        position: relative;
    }
    
    .framework-card {
        background: transparent;
        border: none;
        border-radius: 0;
        padding: 0;
        position: relative;
    }
    
    .card-header {
        display: flex;
        align-items: center;
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
        font-size: 1.375rem;
        font-weight: 600;
        color: #ffffff;
        line-height: 1.2;
        margin: 0 0 0.5rem 0;
        border-bottom: 2px solid rgba(212, 175, 55, 0.6);
        padding-bottom: 0.5rem;
        display: inline-block;
    }
    
    .card-subtitle {
        display: none;
    }
    
    .stage-container {
        display: grid;
        grid-template-columns: 1fr 2px 1fr;
        gap: 2rem;
        align-items: start;
    }
    
    .stage-column {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .stage-divider {
        width: 2px;
        background: rgba(212, 175, 55, 0.3);
        height: 100%;
        align-self: stretch;
    }
    
    .stage-item {
        display: flex;
        gap: 1.5rem;
        padding: 0;
        background: transparent;
        border: none;
        border-radius: 0;
        transition: none;
    }
    
    .stage-number {
        display: none;
    }
    
    .stage-content {
        flex: 1;
    }
    
    .stage-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.125rem;
        font-weight: 600;
        color: #ffffff;
        margin: 0 0 0.75rem 0;
    }
    
    .stage-description {
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 1rem;
        font-size: 0.9375rem;
        line-height: 1.6;
    }
    
    .verification-list {
        background: transparent;
        border: none;
        padding: 0;
        border-radius: 0;
        border-left: none;
    }
    
    .verification-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1rem;
        color: rgba(255, 255, 255, 0.85);
    }
    
    .verification-item:last-child {
        margin-bottom: 0;
    }
    
    .verification-item i {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-top: 0.25rem;
        flex-shrink: 0;
        min-width: 1.2rem;
    }
    
    .verification-item strong {
        color: white;
        font-weight: 600;
    }
    
    .sub-list {
        margin-left: 2rem;
        margin-top: 0.5rem;
        margin-bottom: 1rem;
    }
    
    .sub-list li {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 0.5rem;
        list-style-type: '• ';
        padding-left: 0.5rem;
    }
    
    .note {
        font-style: italic;
        color: var(--halal-gold);
        background: transparent;
        padding: 0.75rem 0;
        border-radius: 0;
        border-left: 3px solid rgba(212, 175, 55, 0.5);
        margin-top: 1rem;
        padding-left: 1rem;
        font-size: 0.9375rem;
    }
    
    .judge-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 0.5rem;
    }
    
    h4.text-white {
        font-size: 1.125rem;
        font-weight: 600;
        color: #ffffff;
        margin: 0 0 1rem 0;
    }
    
    .judge-item {
        display: flex;
        align-items: center;
        padding: 0;
        background: transparent;
        border: none;
        border-radius: 0;
        transition: none;
    }
    
    .judge-item:hover {
        background: transparent;
        border: none;
        transform: none;
        box-shadow: none;
    }
    
    .judge-item i {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-right: 0.75rem;
        flex-shrink: 0;
        min-width: 1.2rem;
    }
    
    .judge-item span {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
    }
    
    .framework-list {
        list-style: none;
        margin: 0;
    }
    
    .framework-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1rem;
        padding: 0;
        background: transparent;
        border: none;
        border-radius: 0;
        transition: none;
    }
    
    .framework-item:hover {
        background: transparent;
        border: none;
        transform: none;
        box-shadow: none;
    }
    
    .framework-icon {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-top: 0.25rem;
        flex-shrink: 0;
        min-width: 1.2rem;
    }
    
    .framework-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.6;
    }
    
    .validation-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 0.5rem;
        margin-top: 1rem;
    }
    
    .mt-8 {
        margin-top: 2rem;
    }
    
    .mb-4 {
        margin-bottom: 1rem;
    }
    
    .mt-1 {
        margin-top: 0.5rem;
    }
    
    .validation-item {
        display: flex;
        align-items: center;
        padding: 0;
        background: transparent;
        border: none;
        border-radius: 0;
        transition: none;
    }
    
    .validation-item:hover {
        background: transparent;
        border: none;
        box-shadow: none;
    }
    
    .validation-item i {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-right: 0.75rem;
        flex-shrink: 0;
        min-width: 1.2rem;
    }
    
    .validation-item span {
        color: rgba(255, 255, 255, 0.85);
        font-weight: 400;
        font-size: 0.9375rem;
    }
    
    .confidential-notice {
        display: flex;
        align-items: flex-start;
        background: transparent;
        color: white;
        padding: 1rem 0;
        border-radius: 0;
        border: none;
        border-left: 3px solid rgba(212, 175, 55, 0.5);
        margin-top: 1.5rem;
        padding-left: 1rem;
    }
    
    .confidential-notice strong {
        color: var(--halal-gold);
        font-weight: 600;
        display: block;
        margin-bottom: 0.5rem;
    }
    
    .confidential-notice p {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.6;
        margin: 0;
    }
    
    .confidential-notice i {
        color: var(--halal-gold);
        font-size: 1.5rem;
        margin-right: 1rem;
        flex-shrink: 0;
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
    @media (max-width: 1024px) {
        .framework-container {
            padding: 2rem 1.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .framework-container {
            padding: 2rem 1rem;
        }
        
        .framework-card {
            padding-bottom: 1.5rem;
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
        
        .stage-container {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .stage-divider {
            display: none;
        }
        
        .stage-item {
            flex-direction: column;
        }
        
        .judge-grid {
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
                JUDGING FRAMEWORK & STANDARDS
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                The judging methodology reflects the highest standards of fairness, objectivity, and global benchmarking, adapted to Halal-specific requirements
            </p>
        </div>
    </div>
</div>

<!-- Framework Section -->
<div class="framework-section">
<div class="framework-container">
    
    <!-- Multi-Stage Evaluation Process -->
    <div class="framework-card scroll-animate fade-in-up delay-1">
        <div class="card-header">
            <div class="card-title-group">
                <h2 class="card-title">MULTI-STAGE EVALUATION PROCESS</h2>
            </div>
        </div>
        <div class="stage-container">
            <!-- Left Column: Stages 1-2 -->
            <div class="stage-column">
                <!-- Stage 1 -->
                <div class="stage-item">
                    <div class="stage-content">
                        <h3 class="stage-title">STAGE 1: TECHNICAL VERIFICATION</h3>
                        <p class="stage-description">All submissions undergo initial screening to verify:</p>
                        <div class="verification-list">
                            <div class="verification-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>ELIGIBILITY</strong>
                                    <ul class="sub-list">
                                        <li>Documentation completeness</li>
                                        <li>Valid Halal certification (where applicable)</li>
                                        <li>Authenticity & compliance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="note">Only qualified entries proceed to Stage 2.</p>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="stage-item">
                    <div class="stage-content">
                        <h3 class="stage-title">STAGE 2: EXPERT PANEL ASSESSMENT</h3>
                        <p class="stage-description">Panels of independent judges evaluate submissions based on structured scoring criteria</p>
                        <div class="verification-list">
                            <div class="verification-item">
                                <i class="fas fa-users"></i>
                                <div>
                                    <strong>JUDGES CONSIST OF:</strong>
                                    <ul class="sub-list">
                                        <li>Halal certification experts</li>
                                        <li>Industry specialists</li>
                                        <li>Academics & researchers</li>
                                        <li>Government representatives</li>
                                        <li>International Halal leaders</li>
                                        <li>Trade & supply chain experts</li>
                                        <li>ESG & sustainability advisors</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Center Divider -->
            <div class="stage-divider"></div>

            <!-- Right Column: Stages 3-5 -->
            <div class="stage-column">
                <!-- Stage 3 -->
                <div class="stage-item">
                    <div class="stage-content">
                        <h3 class="stage-title">STAGE 3: JURY DELIBERATION & CONSENSUS MEETING</h3>
                        <p class="stage-description">Top-scoring entries are reviewed by a senior jury panel</p>
                        <div class="verification-list">
                            <div class="verification-item">
                                <i class="fas fa-gavel"></i>
                                <div>
                                    <strong>THIS ENSURES:</strong>
                                    <ul class="sub-list">
                                        <li>Balanced evaluation</li>
                                        <li>Removal of bias</li>
                                        <li>Holistic consideration of each entry's merit</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 4 -->
                <div class="stage-item">
                    <div class="stage-content">
                        <h3 class="stage-title">STAGE 4: VALIDATION & AUDIT (IF REQUIRED)</h3>
                        <p class="stage-description">Certain categories may require:</p>
                        <div class="verification-list">
                            <div class="verification-item">
                                <i class="fas fa-search"></i>
                                <div>
                                    <ul class="sub-list">
                                        <li>Site visit</li>
                                        <li>Certification verification</li>
                                        <li>Supply chain audit</li>
                                        <li>Additional documentation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="note">This protects the integrity of the awards</p>
                    </div>
                </div>

                <!-- Stage 5 -->
                <div class="stage-item">
                    <div class="stage-content">
                        <h3 class="stage-title">STAGE 5: FINAL SELECTION & CONFIDENTIAL RESULTS</h3>
                        <p class="stage-description">The final winners are endorsed by the Jury Board and remain confidential until the Awards Gala</p>
                    </div>
                </div>
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
