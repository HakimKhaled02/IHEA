@extends('layouts.app')

@section('title', 'Frequently Asked Questions')

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
        font-size: clamp(1rem, 1.8vw, 1.4rem);
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.5;
        font-weight: 400;
        max-width: 900px;
        margin: 0 auto 3rem;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .faq-section {
        width: 100%;
        padding: 2rem 0;
        background: #000000;
        position: relative;
    }
    
    .faq-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 2rem 2rem;
        position: relative;
    }
    
    .faq-card {
        background: transparent;
        border: none;
        border-radius: 0;
        padding: 0;
        position: relative;
        margin-bottom: 0;
        border-bottom: 1px solid rgba(212, 175, 55, 0.2);
    }
    
    .faq-card:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }
    
    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        padding: 1rem 0;
        cursor: pointer;
        user-select: none;
        transition: all 0.3s ease;
    }
    
    .card-header:hover {
        opacity: 0.9;
        padding-left: 0.5rem;
    }
    
    .card-header:hover .card-title {
        color: var(--halal-gold);
    }
    
    .card-header:hover .card-toggle-icon {
        transform: scale(1.2);
        color: #f4d03f;
    }
    
    .card-header-content {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex: 1;
    }
    
    .card-toggle-icon {
        color: var(--halal-gold);
        font-size: 1.2rem;
        transition: transform 0.3s ease;
        flex-shrink: 0;
    }
    
    .faq-card.active .card-toggle-icon {
        transform: rotate(180deg);
    }
    
    .card-title-group {
        flex: 1;
    }
    
    .card-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        color: #ffffff;
        line-height: 1.4;
        margin: 0 0 0.15rem 0;
    }
    
    .card-subtitle {
        display: none;
    }
    
    .card-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.4s ease;
        padding: 0;
    }
    
    .faq-card.active .card-content {
        max-height: 2000px;
        padding: 0.75rem 0 1rem 0;
    }
    
    .faq-answer {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.875rem;
        line-height: 1.5;
        margin-bottom: 0.5rem;
    }
    
    .faq-list {
        list-style: none;
        margin: 0.5rem 0 0 0;
        padding: 0;
    }
    
    .faq-list li {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.5rem;
        padding: 0;
        background: transparent;
        border: none;
        border-radius: 0;
        transition: none;
    }
    
    .faq-list li:last-child {
        margin-bottom: 0;
    }
    
    .faq-list li:hover {
        background: transparent;
        transform: none;
    }
    
    .faq-icon {
        color: var(--halal-gold);
        font-size: 0.875rem;
        margin-top: 0.15rem;
        flex-shrink: 0;
        min-width: 0.875rem;
    }
    
    .faq-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.875rem;
        line-height: 1.5;
    }
    
    .faq-subsection {
        margin-top: 0.75rem;
    }
    
    .faq-subsection-title {
        color: rgba(255, 255, 255, 0.9);
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
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
    .scroll-animate.delay-6 { transition-delay: 0.6s; }
    .scroll-animate.delay-7 { transition-delay: 0.7s; }
    .scroll-animate.delay-8 { transition-delay: 0.8s; }
    .scroll-animate.delay-9 { transition-delay: 0.9s; }
    .scroll-animate.delay-10 { transition-delay: 1.0s; }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .faq-container {
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
                FREQUENTLY ASKED QUESTIONS
            </h1>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="faq-section">
<div class="faq-container">
    
    <!-- Q1 -->
    <div class="faq-card scroll-animate fade-in-up delay-1">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">WHO IS ELIGIBLE TO PARTICIPATE?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                Any organization, SME, multinational, startup, cooperatives, government agency, or individual entity engaged in Halal-related activities is eligible.
            </p>
        </div>
    </div>

    <!-- Q2 -->
    <div class="faq-card scroll-animate fade-in-up delay-2">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">DO I NEED HALAL CERTIFICATION TO ENTER?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                Only entries involving food, cosmetics, pharmaceuticals, logistics and supply chain require Halal certification, other categories may focus on innovation, strategy, governance, ESG, or contribution
            </p>
        </div>
    </div>

    <!-- Q3 -->
    <div class="faq-card scroll-animate fade-in-up delay-3">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">CAN ONE ORGANIZATION SUBMIT ENTRIES FOR MULTIPLE CATEGORIES?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                Yes. There is no limit on how many categories you may enter
            </p>
        </div>
    </div>

    <!-- Q4 -->
    <div class="faq-card scroll-animate fade-in-up delay-4">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">ARE INTERNATIONAL COMPANIES ALLOWED TO PARTICIPATE?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                Absolutely. The Awards welcome entries from any country and region worldwide
            </p>
        </div>
    </div>

    <!-- Q5 -->
    <div class="faq-card scroll-animate fade-in-up delay-5">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">WILL OUR SUBMISSION BE KEPT CONFIDENTIAL?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                Yes. All entries are handled with strict confidentiality protocols and used solely for judging
            </p>
        </div>
    </div>

    <!-- Q6 -->
    <div class="faq-card scroll-animate fade-in-up delay-6">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">WHAT KIND OF EVIDENCE IS REQUIRED?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                Evidence may include:
            </p>
            <ul class="faq-list">
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Certification records</span>
                </li>
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Performance data</span>
                </li>
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Audit reports</span>
                </li>
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Financial outcomes</span>
                </li>
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Supply chain documentation</span>
                </li>
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Case studies</span>
                </li>
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Photos, videos, media coverage</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Q7 -->
    <div class="faq-card scroll-animate fade-in-up delay-7">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">IF WE WIN, HOW CAN WE USE THE AWARD?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                Winners may use:
            </p>
            <ul class="faq-list">
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Winner seal</span>
                </li>
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Trophy visuals</span>
                </li>
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Press recognition</span>
                </li>
                <li>
                    <i class="fas fa-check-circle faq-icon"></i>
                    <span class="faq-text">Case features</span>
                </li>
            </ul>
            <div class="faq-subsection">
                <p class="faq-subsection-title">Across:</p>
                <ul class="faq-list">
                    <li>
                        <i class="fas fa-check-circle faq-icon"></i>
                        <span class="faq-text">Packaging</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle faq-icon"></i>
                        <span class="faq-text">Marketing</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle faq-icon"></i>
                        <span class="faq-text">Digital presence</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle faq-icon"></i>
                        <span class="faq-text">Investor decks</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle faq-icon"></i>
                        <span class="faq-text">Promotional campaigns</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Q8 -->
    <div class="faq-card scroll-animate fade-in-up delay-8">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">CAN STARTUPS PARTICIPATE?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                Yes. There are specific categories designed for emerging brands, innovators, and new market entrants
            </p>
        </div>
    </div>

    <!-- Q9 -->
    <div class="faq-card scroll-animate fade-in-up delay-9">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">HOW ARE THE WINNERS ANNOUNCED?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                All winners are revealed during the International Halal Awards Gala Night, held alongside IHEC 2026
            </p>
        </div>
    </div>

    <!-- Q10 -->
    <div class="faq-card scroll-animate fade-in-up delay-10">
        <div class="card-header" onclick="toggleFAQ(this)">
            <div class="card-header-content">
                <div class="card-title-group">
                    <h2 class="card-title">WILL JUDGES PROVIDE FEEDBACK?</h2>
                </div>
            </div>
            <i class="fas fa-chevron-down card-toggle-icon"></i>
        </div>
        <div class="card-content">
            <p class="faq-answer">
                Due to confidentiality, judges do not provide feedback on individual entries
            </p>
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
    
    // Toggle FAQ accordion
    function toggleFAQ(header) {
        const card = header.closest('.faq-card');
        const isActive = card.classList.contains('active');
        
        // Close all other cards (optional - remove if you want multiple open)
        document.querySelectorAll('.faq-card').forEach(otherCard => {
            if (otherCard !== card) {
                otherCard.classList.remove('active');
            }
        });
        
        // Toggle current card
        if (isActive) {
            card.classList.remove('active');
        } else {
            card.classList.add('active');
        }
    }
</script>
@endsection
