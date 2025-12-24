@extends('layouts.app')

@section('title', 'Submission Rules')

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
        background: #000000;
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
    
    .rules-section {
        width: 100%;
        padding: 4rem 0;
        background: #000000;
        position: relative;
    }
    
    .rules-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 3rem 2rem;
        position: relative;
    }
    
    .rule-card {
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
    
    .card-content {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 0;
        font-size: 0.9rem;
    }
    
    .rules-list {
        list-style: none;
        margin: 0;
    }
    
    .rule-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 0.75rem;
        padding: 0.75rem 1rem;
        background: rgba(212, 175, 55, 0.05);
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .rule-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.4);
        transform: translateX(4px);
    }
    
    .rule-icon {
        color: var(--halal-gold);
        font-size: 1.2rem;
        flex-shrink: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    .rule-icon svg {
        width: 1.2rem;
        height: 1.2rem;
        stroke: #d4af37;
        stroke-width: 2;
        fill: none;
    }
    
    .rule-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.9);
    }
    
    .rules-intro {
        margin-bottom: 1.5rem;
    }
    
    .rules-intro p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        line-height: 1.6;
    }
    
    .rules-list-container {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .rule-item-letter {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
        padding: 0;
        background: transparent;
        border: none;
        border-radius: 0;
        transition: none;
    }
    
    .rule-item-letter:hover {
        background: transparent;
        border: none;
        transform: none;
    }
    
    .rule-letter {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--halal-gold);
        min-width: 2rem;
        flex-shrink: 0;
    }
    
    .rule-content {
        flex: 1;
    }
    
    .rule-content strong {
        display: block;
        color: #ffffff;
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        line-height: 1.4;
    }
    
    .rule-content p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        line-height: 1.6;
        margin: 0;
    }
    
    .rules-footer {
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid rgba(212, 175, 55, 0.3);
    }
    
    .rules-footer p {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.95rem;
        line-height: 1.6;
        font-style: italic;
        text-align: center;
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
        .rules-container {
            padding: 2rem 1.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .rules-container {
            padding: 2rem 1rem;
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
                SUBMISSION RULES
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                Ensure your entry complies with all submission requirements for successful participation in the International Halal Economic Award 2026
            </p>
        </div>
    </div>
</div>

<!-- Rules Section -->
<div class="rules-section">
<div class="rules-container">
    
    <!-- Submission Rules -->
    <div class="rule-card scroll-animate fade-in-up delay-1">
        <div class="card-header">
            <div class="card-title-group">
                <h2 class="card-title">SUBMISSION RULES</h2>
            </div>
        </div>
        <div class="rules-intro">
            <p>To maintain integrity and fairness:</p>
        </div>
        <div class="rules-list-container">
            <div class="rule-item-letter">
                <div class="rule-letter">1.</div>
                <div class="rule-content">
                    <strong>EACH ENTRY MUST BE ORIGINAL AND OWNED BY THE SUBMITTING ORGANIZATION</strong>
                    <p>All information provided must accurately reflect real achievements, performance, and outcomes</p>
                </div>
            </div>
            
            <div class="rule-item-letter">
                <div class="rule-letter">2.</div>
                <div class="rule-content">
                    <strong>ENTRIES MAY BE SUBMITTED INTO MULTIPLE CATEGORIES</strong>
                    <p>Provided they meet the criteria for each category.</p>
                </div>
            </div>
            
            <div class="rule-item-letter">
                <div class="rule-letter">3.</div>
                <div class="rule-content">
                    <strong>ALL SUBMISSIONS MUST BE COMPLETE</strong>
                    <p>Incomplete entries (missing documents, data, or certification) may be disqualified</p>
                </div>
            </div>
            
            <div class="rule-item-letter">
                <div class="rule-letter">4.</div>
                <div class="rule-content">
                    <strong>SUPPORTING EVIDENCE IS REQUIRED</strong>
                    <p>Data, case studies, certification records, audits, performance metrics, reports, and visual documentation must be included</p>
                </div>
            </div>
            
            <div class="rule-item-letter">
                <div class="rule-letter">5.</div>
                <div class="rule-content">
                    <strong>FEES ARE NON-REFUNDABLE</strong>
                    <p>Once submitted, entries go directly into the evaluation pool</p>
                </div>
            </div>
            
            <div class="rule-item-letter">
                <div class="rule-letter">6.</div>
                <div class="rule-content">
                    <strong>ORGANIZERS MAY REQUEST ADDITIONAL VERIFICATION</strong>
                    <p>This includes site checks, interviews, audits, or certification validation.</p>
                </div>
            </div>
            
            <div class="rule-item-letter">
                <div class="rule-letter">7.</div>
                <div class="rule-content">
                    <strong>DEADLINES MUST BE ADHERED TO</strong>
                    <p>Late entries may incur additional charges or be excluded from judging.</p>
                </div>
            </div>
        </div>
        
        <div class="rules-footer">
            <p>These rules are established to ensure a transparent, credible and internationally recognized award process</p>
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

