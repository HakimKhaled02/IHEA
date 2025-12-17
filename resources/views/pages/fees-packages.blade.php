@extends('layouts.app')

@section('title', 'Awards Participation Fees & Prestige Packages')

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
    
    .packages-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 4rem 2rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        position: relative;
    }
    
    .package-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 3rem;
        position: relative;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .package-card:hover {
        transform: translateY(-12px) scale(1.02);
        border-color: rgba(212, 175, 55, 0.4);
        box-shadow: 0 25px 80px rgba(212, 175, 55, 0.3);
    }
    
    .package-card.premium {
        border-color: rgba(212, 175, 55, 0.3);
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
    }
    
    .package-card.premium::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, transparent, var(--halal-gold), transparent);
    }
    
    .package-card.elite {
        border-color: rgba(5, 150, 105, 0.3);
        background: linear-gradient(135deg, rgba(5, 150, 105, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
    }
    
    .package-card.elite::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, transparent, var(--halal-green), transparent);
    }
    
    .package-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 1.5rem;
    }
    
    .premium .package-badge {
        background: rgba(212, 175, 55, 0.2);
        color: var(--halal-gold);
        border: 1px solid rgba(212, 175, 55, 0.3);
    }
    
    .elite .package-badge {
        background: rgba(5, 150, 105, 0.2);
        color: var(--halal-green);
        border: 1px solid rgba(5, 150, 105, 0.3);
    }
    
    .package-title {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(1.8rem, 3vw, 2.2rem);
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 0.5rem;
        line-height: 1.2;
    }
    
    .package-subtitle {
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 2rem;
        line-height: 1.4;
    }
    
    .premium .package-subtitle {
        color: var(--halal-gold);
    }
    
    .elite .package-subtitle {
        color: var(--halal-green);
    }
    
    .package-price {
        font-size: 4rem;
        font-weight: 900;
        margin-bottom: 2rem;
        display: flex;
        align-items: baseline;
        gap: 0.5rem;
        position: relative;
        animation: priceGlow 2s ease-in-out infinite;
    }
    
    .premium .package-price {
        background: linear-gradient(135deg, #d4af37, #f4e4bc, #d4af37);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: drop-shadow(0 0 20px rgba(212, 175, 55, 0.6));
        text-shadow: 0 0 40px rgba(212, 175, 55, 0.4);
    }
    
    .elite .package-price {
        background: linear-gradient(135deg, #059669, #10b981, #059669);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: drop-shadow(0 0 20px rgba(5, 150, 105, 0.6));
        text-shadow: 0 0 40px rgba(5, 150, 105, 0.4);
    }
    
    .package-price .currency {
        font-size: 2rem;
        font-weight: 700;
        opacity: 0.9;
        background: none !important;
        -webkit-text-fill-color: #ffffff !important;
        filter: none !important;
    }
    
    @keyframes priceGlow {
        0%, 100% { 
            transform: scale(1);
            filter: brightness(1);
        }
        50% { 
            transform: scale(1.05);
            filter: brightness(1.2);
        }
    }
    
    .prestige-ribbon {
        position: absolute;
        top: 20px;
        right: -30px;
        background: linear-gradient(135deg, var(--halal-gold), #b8941f);
        color: #000;
        padding: 0.5rem 3rem;
        font-size: 0.75rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        transform: rotate(45deg);
        box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
        z-index: 10;
        animation: ribbonShine 3s ease-in-out infinite;
    }
    
    @keyframes ribbonShine {
        0%, 100% { 
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
        }
        50% { 
            box-shadow: 0 4px 25px rgba(212, 175, 55, 0.8);
        }
    }
    
    .package-price .currency {
        font-size: 1.5rem;
        font-weight: 600;
        opacity: 0.8;
    }
    
    .package-description {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 2rem;
        font-size: 0.95rem;
    }
    
    .benefits-list {
        list-style: none;
        margin-bottom: 2rem;
        flex: 1;
    }
    
    .benefit-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .benefit-item:hover {
        background: rgba(255, 255, 255, 0.04);
        transform: translateX(8px);
    }
    
    .benefit-letter {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        font-weight: 900;
        line-height: 1;
        min-width: 40px;
        text-align: center;
    }
    
    .premium .benefit-letter {
        color: var(--halal-gold);
    }
    
    .elite .benefit-letter {
        color: var(--halal-green);
    }
    
    .benefit-content {
        flex: 1;
    }
    
    .benefit-title {
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 0.5rem;
        font-size: 1rem;
    }
    
    .benefit-description {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.9rem;
        line-height: 1.5;
    }
    
    .package-cta {
        margin-top: auto;
        padding-top: 2rem;
    }
    
    .cta-button {
        display: inline-block;
        padding: 1rem 2rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: 1rem;
        text-align: center;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        cursor: pointer;
        width: 100%;
    }
    
    .premium .cta-button {
        background: linear-gradient(135deg, var(--halal-gold), #b8941f);
        color: #000;
    }
    
    .premium .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
    }
    
    .elite .cta-button {
        background: linear-gradient(135deg, var(--halal-green), #047857);
        color: #ffffff;
    }
    
    .elite .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(5, 150, 105, 0.4);
    }
    
    /* Scroll Animations */
    .scroll-animate {
        opacity: 0;
        transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .scroll-animate.fade-in-up {
        transform: translateY(60px);
    }
    
    .scroll-animate.fade-in-left {
        transform: translateX(-60px);
    }
    
    .scroll-animate.fade-in-right {
        transform: translateX(60px);
    }
    
    .scroll-animate.is-animated {
        opacity: 1;
        transform: translateY(0) translateX(0);
    }
    
    .scroll-animate.delay-1 { transition-delay: 0.1s; }
    .scroll-animate.delay-2 { transition-delay: 0.2s; }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .packages-container {
            grid-template-columns: 1fr;
            gap: 2rem;
            padding: 2rem 1rem;
        }
        
        .package-card {
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
                filter: none;
            "
            onerror="console.error('Video failed to load'); this.style.display='none';"
            onloadstart="console.log('Video loading started...');"
            oncanplay="console.log('Video can play'); this.play().catch(e => console.error('Autoplay blocked:', e));"
            onloadeddata="console.log('Video data loaded');"
        >
            <source src="{{ asset('assets/abstract-lines-bg.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <!-- Video Overlay for Text Readability -->
        <div class="video-overlay" style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        "></div>
        
        <div class="hero-content">
            <div class="hero-badge scroll-animate fade-in-up">
                International Halal Economic Award 2026
            </div>
            <h1 class="hero-title scroll-animate fade-in-up delay-1">
                AWARD PARTICIPATION FEES<br>& PRESTIGE PACKAGES
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                Premium Recognition Packages designed to elevate recipients to the highest levels of global recognition, leadership positioning, and long-term brand prestige
            </p>
        </div>
    </div>
</div>

<!-- Packages Section -->
<div class="packages-container">
    
    <!-- Premium Package -->
    <div class="package-card premium scroll-animate fade-in-left delay-1">
        <div class="package-badge">PREMIUM CATEGORY</div>
        <div class="prestige-ribbon">MOST PRESTIGIOUS</div>
        <h2 class="package-title">GLOBAL HALAL EXCELLENCE AWARD</h2>
        <p class="package-subtitle">"The Highest Honor of the International Halal Economic Awards 2026"</p>
        
        <div class="package-price">
            <span class="currency">RM</span>
            <span>15,000</span>
        </div>
        
        <p class="package-description">
            This prestigious package is reserved for organizations and leaders who demonstrate extraordinary contributions and breakthrough achievements within the global Halal ecosystem.
        </p>
        
        <ul class="benefits-list">
            <li class="benefit-item">
                <span class="benefit-letter">A</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">AWARD PRESENTATION BY HONORABLE MINISTER</h4>
                    <p class="benefit-description">A rare and highly prestigious moment where the award recipient receives their accolade directly from a Malaysian Minister or dignitary</p>
                </div>
            </li>
            
            <li class="benefit-item">
                <span class="benefit-letter">B</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">VVIP SEATING EXPERIENCE</h4>
                    <p class="benefit-description">The award recipient will be seated at the VVIP Table, together with Ministers, VIP guests, international leaders, and high-profile dignitaries</p>
                </div>
            </li>
            
            <li class="benefit-item">
                <span class="benefit-letter">C</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">NATIONAL & INTERNATIONAL MEDIA FEATURE</h4>
                    <p class="benefit-description">Your achievement will be highlighted in National & International media platforms, Online news portals, and Official social media channels</p>
                </div>
            </li>
            
            <li class="benefit-item">
                <span class="benefit-letter">D</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">DEDICATED GALA SEATING FOR YOUR GUESTS</h4>
                    <p class="benefit-description">A full 10-pax Premium Table will be allocated for your family, colleagues, partners, or invited guests</p>
                </div>
            </li>
            
            <li class="benefit-item">
                <span class="benefit-letter">E</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">HALL OF FAME INDUCTION (LIFETIME VISIBILITY)</h4>
                    <p class="benefit-description">Your organization will be permanently listed in the WIED Hall of Fame, IHEC 2026 Hall of Honor, and International Halal Awards Digital Hall of Fame</p>
                </div>
            </li>
        </ul>
        
        <div class="package-cta">
            <a href="#" class="cta-button">Choose Premium Package</a>
        </div>
    </div>

    <!-- Elite Package -->
    <div class="package-card elite scroll-animate fade-in-right delay-2">
        <div class="package-badge">ELITE CATEGORY</div>
        <h2 class="package-title">HALAL INDUSTRY DISTINCTION AWARD</h2>
        <p class="package-subtitle">"Honoring High-Impact Leaders, Innovators & Emerging Champions"</p>
        
        <div class="package-price">
            <span class="currency">RM</span>
            <span>10,000</span>
        </div>
        
        <p class="package-description">
            This exclusive award acknowledges organizations and individuals who have demonstrated strong commitment, performance, and leadership in advancing Halal industry standards.
        </p>
        
        <ul class="benefits-list">
            <li class="benefit-item">
                <span class="benefit-letter">A</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">AWARD PRESENTATION BY CEO OR INDUSTRY LEADER</h4>
                    <p class="benefit-description">Recipients will be honored by respected industry captains, CEOs, or distinguished Halal authorities</p>
                </div>
            </li>
            
            <li class="benefit-item">
                <span class="benefit-letter">B</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">VIP SEATING PRIVILEGES</h4>
                    <p class="benefit-description">Award recipients will be seated at the VIP Table, positioned adjacent to the VVIP area — ensuring premium networking access</p>
                </div>
            </li>
            
            <li class="benefit-item">
                <span class="benefit-letter">C</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">NATIONAL MEDIA ACKNOWLEDGEMENT</h4>
                    <p class="benefit-description">Your award recognition will be featured in Major digital media outlets, Official IHEC & WIED social media, and Awards publicity campaigns</p>
                </div>
            </li>
            
            <li class="benefit-item">
                <span class="benefit-letter">D</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">EXCLUSIVE TABLE FOR YOUR GUESTS</h4>
                    <p class="benefit-description">Enjoy a 10-pax VIP Table for family members, guests or corporate representatives</p>
                </div>
            </li>
            
            <li class="benefit-item">
                <span class="benefit-letter">E</span>
                <div class="benefit-content">
                    <h4 class="benefit-title">HALL OF FAME RECOGNITION (LONG-TERM EXPOSURE)</h4>
                    <p class="benefit-description">Awardees will be permanently listed in the WIED Hall of Fame, IHEC 2026 Hall of Honor, and International Halal Awards Digital Hall of Fame</p>
                </div>
            </li>
        </ul>
        
        <div class="package-cta">
            <a href="#" class="cta-button">Choose Elite Package</a>
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

