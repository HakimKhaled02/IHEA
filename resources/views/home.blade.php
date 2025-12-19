@extends('layouts.app')

@section('title', 'IHEC Awards 2026 - Home')

@section('content')
<div class="homepage">
    <div class="hero-section">
        <!-- Video Background -->
        <video autoplay muted loop playsinline preload="auto" class="background-video" id="bgVideo">
            <source src="{{ asset('assets/Ihea.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="video-overlay"></div>
        
        <!-- Top Navigation Buttons (Desktop) -->
        <div class="top-nav-buttons">
            <a href="#" class="btn btn-secondary btn-large btn-view">
                <i class="fas fa-download btn-icon"></i>
                <span class="btn-text">DOWNLOAD MODULE</span>
            </a>
            <a href="{{ route('eligibility') }}" class="btn btn-tertiary btn-large btn-contact">
                <i class="fas fa-question-circle btn-icon"></i>
                <span class="btn-text">AM I ELIGIBLE?</span>
            </a>
        </div>
        
        <!-- Top Navigation Dropdown (Mobile Only) -->
        <div class="top-nav-dropdown">
            <button class="dropdown-toggle" id="topNavDropdown">
                <i class="fas fa-chevron-down dropdown-icon"></i>
            </button>
            <div class="dropdown-menu" id="dropdownMenu">
                <a href="#" class="dropdown-item">
                    <i class="fas fa-download btn-icon"></i>
                    <span class="btn-text">DOWNLOAD MODULE</span>
                </a>
                <a href="{{ route('eligibility') }}" class="dropdown-item">
                    <i class="fas fa-question-circle btn-icon"></i>
                    <span class="btn-text">AM I ELIGIBLE?</span>
                </a>
            </div>
        </div>
        
        <div class="hero-content">
            <div class="hero-logo-container">
                <div class="logo-glow"></div>
                <img src="{{ asset('assets/ihealogo.png') }}" alt="IHEC Logo" class="hero-logo-img">
            </div>
            
            <div class="hero-text-container">
                <h1 class="hero-title">
                    INTERNATIONAL HALAL ECONOMIC<br>AWARD (IHEA) 2026
                </h1>
                <p class="hero-subtitle">5 Feb 2026 (Thu)  |  7.30 pm - 11.00pm  |  Tenera Hotel & Suites, Bangi</p>
            </div>
            
            <!-- Center Boxes -->
            <div class="center-boxes">
                <a href="{{ route('how-to-enter') }}" class="how-to-join-link">
                    <h3 class="box-title">HOW TO JOIN ?</h3>
                </a>
                <div class="center-boxes-bottom">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeCURjiSDPnTe07wafiEtYrgO1YSytYcXkjtI2sKrfEnoZ-mg/viewform" target="_blank" class="center-box">
                        <h3 class="box-title">REGISTER</h3>
                    </a>
                    
                    <a href="{{ route('contact') }}" class="center-box">
                        <h3 class="box-title">CONTACT US</h3>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        
    </div>
    
    <!-- About Section -->
    <div class="about-section-wrapper">
        <div class="about-page">
            <div class="about-image-column">
                <img src="{{ asset('assets/aboutpage1.jpg') }}" alt="About IHEA 2026" class="about-page-image">
            </div>
            <div class="about-content-column">
                <div class="about-hero">
                    <div class="about-hero-content">
                        <h1 class="about-title">INTERNATIONAL HALAL ECONOMIC AWARD (IHEA) <span class="year-highlight">2026</span></h1>
                        <p class="about-subtitle">Premier Global Platform for Halal Excellence</p>
                    </div>
                </div>

                <div class="about-content">
                    <div class="about-intro">
                        <div class="intro-icon">🏆</div>
                        <h2>About IHEA 2026</h2>
                        <p class="lead-text">The INTERNATIONAL HALAL ECONOMIC AWARD (IHEA) 2026 is the premier global platform dedicated to recognizing outstanding achievements across the Halal economy. Established under the flagship International Halal Economy Conference (IHEC) 2026, this prestigious awards programme honors organizations, leaders and innovators who demonstrate excellence in Halal integrity, ethical practices, sustainable development, and impactful market performance.</p>
                    </div>

                    <div class="about-section">
                        <div class="section-header">
                            <i class="fas fa-globe section-icon"></i>
                            <h3>Global Halal Economy</h3>
                        </div>
                        <p>As the Halal industry evolves into a multi-trillion-dollar global force, the demand for trusted brands, compliant systems, sustainable supply chains, and transparent governance has never been greater. The INTERNATIONAL HALAL ECONOMIC AWARD (IHEA) 2026 seeks to highlight and celebrate the individuals and organizations who push boundaries, elevate standards, and contribute meaningfully to the advancement of the global Halal landscape.</p>
                    </div>

                    <div class="about-section">
                        <div class="section-header">
                            <i class="fas fa-industry section-icon"></i>
                            <h3>Industry Coverage</h3>
                        </div>
                        <p>From agriculture and food security to finance, technology, logistics, lifestyle and ESG, the Awards showcase the breadth and influence of Halal across industries, markets and cultures.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Evening Gala Section -->
    <div class="gala-section">
        <div class="gala-container">
            <div class="gala-header">
                <h2 class="gala-title">Evening Gala & Global Recognition (IHEA 2026)</h2>
                <div class="gala-subtitle">An exclusive evening celebrating excellence in the Halal economy</div>
            </div>
            
            <div class="gala-timeline">
                <div class="timeline-item">
                    <div class="timeline-time">7:30 PM</div>
                    <div class="timeline-content">
                        <h3>Arrival of Guests</h3>
                        <p>Invited attendees, international delegates, industry leaders, and VIP guests arrive and are escorted to their designated seats.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:00 PM</div>
                    <div class="timeline-content">
                        <h3>Arrival of the Deputy Prime Minister</h3>
                        <p>Formal announcement of the arrival of YAB Deputy Prime Minister and escort to the VVIP table.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:15 PM</div>
                    <div class="timeline-content">
                        <h3>Welcome Address by the Chairman of IIHE–CIHE</h3>
                        <p>Opening remarks delivered by the Chairman to commence the Gala Evening.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:30 PM</div>
                    <div class="timeline-content">
                        <h3>Official Address by YAB Deputy Prime Minister</h3>
                        <p>Keynote speech highlighting Malaysia's direction in advancing the national and global Halal Economy.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:45 PM</div>
                    <div class="timeline-content">
                        <h3>Official Launch of the International Institute of Halal Economy (IIHE)</h3>
                        <p>Grand unveiling of IIHE accompanied by a special video montage and symbolic officiation.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">9:00 PM</div>
                    <div class="timeline-content">
                        <h3>International Artist Performance (Segment 1)</h3>
                        <p>Opening performance to elevate the evening's ambience and entertainment.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">9:15 PM</div>
                    <div class="timeline-content">
                        <h3>Presentation of 10 Awards (Halal International Award 2025 – Phase 1)</h3>
                        <p>Awarding of the first ten prestigious categories to selected recipients.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">9:45 PM</div>
                    <div class="timeline-content">
                        <h3>International Artist Performance (Segment 2)</h3>
                        <p>Second performance segment offering cultural and artistic enrichment.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">10:00 PM</div>
                    <div class="timeline-content">
                        <h3>Presentation of 5 Awards (Halal International Award 2025 – Phase 2)</h3>
                        <p>Awarding of the final five categories, completing the full set of 15 awards.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">10:30 PM</div>
                    <div class="timeline-content">
                        <h3>Group Photo with Award Recipients & VIPs</h3>
                        <p>Official photography session involving VIPs, award winners, and honoured guests.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">11:00 PM</div>
                    <div class="timeline-content">
                        <h3>Media Session & Adjournment</h3>
                        <p>Brief press conference with organisers and award recipients followed by the conclusion of the gala event.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Award Fees Section -->
    <div class="fees-section">
        <div class="max-w-6xl mx-auto px-8 py-8">
            <h2 class="text-3xl font-bold text-center text-halal-gold mb-3">Award Participation Fees & Prestige Packages</h2>
            <p class="text-center text-white/80 mb-8 max-w-3xl mx-auto text-sm">
                Premium Recognition Packages designed to elevate recipients to the highest levels of global recognition, leadership positioning, and long-term brand prestige
            </p>
            
            <div class="packages-container">
                <!-- Premium Package -->
                <div class="package-card premium">
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
                            <span class="benefit-icon"><i class="fas fa-trophy"></i></span>
                            <div class="benefit-content">
                                <h4 class="benefit-title">AWARD PRESENTATION BY HONORABLE MINISTER</h4>
                                <p class="benefit-description">A rare and highly prestigious moment where the award recipient receives their accolade directly from a Malaysian Minister or dignitary</p>
                            </div>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon"><i class="fas fa-chair"></i></span>
                            <div class="benefit-content">
                                <h4 class="benefit-title">VVIP SEATING EXPERIENCE</h4>
                                <p class="benefit-description">The award recipient will be seated at the VVIP Table, together with Ministers, VIP guests, international leaders, and high-profile dignitaries</p>
                            </div>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon"><i class="fas fa-newspaper"></i></span>
                            <div class="benefit-content">
                                <h4 class="benefit-title">NATIONAL & INTERNATIONAL MEDIA FEATURE</h4>
                                <p class="benefit-description">Your achievement will be highlighted in National & International media platforms, Online news portals, and Official social media channels</p>
                            </div>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon"><i class="fas fa-users"></i></span>
                            <div class="benefit-content">
                                <h4 class="benefit-title">DEDICATED GALA SEATING FOR YOUR GUESTS</h4>
                                <p class="benefit-description">A full 10-pax Premium Table will be allocated for your family, colleagues, partners, or invited guests</p>
                            </div>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon"><i class="fas fa-star"></i></span>
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
                <div class="package-card elite">
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
                            <span class="benefit-icon"><i class="fas fa-award"></i></span>
                            <div class="benefit-content">
                                <h4 class="benefit-title">AWARD PRESENTATION BY CEO OR INDUSTRY LEADER</h4>
                                <p class="benefit-description">Recipients will be honored by respected industry captains, CEOs, or distinguished Halal authorities</p>
                            </div>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon"><i class="fas fa-chair"></i></span>
                            <div class="benefit-content">
                                <h4 class="benefit-title">VIP SEATING PRIVILEGES</h4>
                                <p class="benefit-description">Award recipients will be seated at the VIP Table, positioned adjacent to the VVIP area — ensuring premium networking access</p>
                            </div>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon"><i class="fas fa-bullhorn"></i></span>
                            <div class="benefit-content">
                                <h4 class="benefit-title">NATIONAL MEDIA ACKNOWLEDGEMENT</h4>
                                <p class="benefit-description">Your award recognition will be featured in Major digital media outlets, Official IHEC & WIED social media, and Awards publicity campaigns</p>
                            </div>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon"><i class="fas fa-users"></i></span>
                            <div class="benefit-content">
                                <h4 class="benefit-title">EXCLUSIVE TABLE FOR YOUR GUESTS</h4>
                                <p class="benefit-description">Enjoy a 10-pax VIP Table for family members, guests or corporate representatives</p>
                            </div>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon"><i class="fas fa-star"></i></span>
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
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about-page.css') }}">
<style>
    :root {
        --halal-green: #059669;
        --halal-dark: #064e3b;
        --halal-gold: #d4af37;
    }
    
    /* Make hero subtitle bolder for better visibility */
    .hero-subtitle {
        font-weight: 700 !important;
        font-size: 1.2rem !important;
    }
    
    /* Fees Section Styles */
    .fees-section {
        background: transparent;
        margin: 1.5rem 0;
    }
    
    /* Packages Container */
    .packages-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        position: relative;
    }
    
    /* Package Card Styles */
    .package-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 2rem;
        position: relative;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .package-card:hover {
        transform: translateY(-8px) scale(1.01);
        border-color: rgba(212, 175, 55, 0.4);
        box-shadow: 0 15px 50px rgba(212, 175, 55, 0.3);
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
        padding: 0.4rem 0.8rem;
        border-radius: 15px;
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 1rem;
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
        font-size: clamp(1.5rem, 2.5vw, 1.8rem);
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 0.4rem;
        line-height: 1.2;
    }
    
    .package-subtitle {
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 1.5rem;
        line-height: 1.4;
    }
    
    .premium .package-subtitle {
        color: var(--halal-gold);
    }
    
    .elite .package-subtitle {
        color: var(--halal-green);
    }
    
    .package-price {
        font-size: 3rem;
        font-weight: 900;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: baseline;
        gap: 0.4rem;
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
        font-size: 1.5rem;
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
    
    .package-description {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.5;
        margin-bottom: 1.5rem;
        font-size: 0.85rem;
    }
    
    .benefits-list {
        list-style: none;
        margin-bottom: 1.5rem;
        flex: 1;
    }
    
    .benefit-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 1rem;
        padding: 0.75rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .benefit-item:hover {
        background: rgba(255, 255, 255, 0.04);
        transform: translateX(8px);
    }
    
    .benefit-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 32px;
        height: 32px;
        font-size: 1.1rem;
        border-radius: 8px;
        flex-shrink: 0;
    }
    
    .premium .benefit-icon {
        color: var(--halal-gold);
        background: rgba(212, 175, 55, 0.15);
    }
    
    .elite .benefit-icon {
        color: var(--halal-green);
        background: rgba(5, 150, 105, 0.15);
    }
    
    .benefit-icon i {
        display: block;
    }
    
    .benefit-content {
        flex: 1;
    }
    
    .benefit-title {
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 0.4rem;
        font-size: 0.9rem;
    }
    
    .benefit-description {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.8rem;
        line-height: 1.4;
    }
    
    .package-cta {
        margin-top: auto;
        padding-top: 1.5rem;
    }
    
    .cta-button {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.9rem;
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
            gap: 1.5rem;
        }
        
        .package-card {
            padding: 1.5rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('bgVideo');
        
        // Ensure video plays
        video.play().catch(function(error) {
            console.log('Video autoplay failed:', error);
            // Fallback: add background image if video fails
            document.querySelector('.hero-section').style.background = 'linear-gradient(135deg, #0a0a0a 0%, #064e3b 50%, #0a0a0a 100%)';
        });
        
        // Retry loading video if it fails
        video.addEventListener('error', function() {
            console.log('Video loading error, applying fallback background');
            document.querySelector('.hero-section').style.background = 'linear-gradient(135deg, #0a0a0a 0%, #064e3b 50%, #0a0a0a 100%)';
        });
        
        // Dropdown menu toggle
        const dropdownToggle = document.getElementById('topNavDropdown');
        const dropdownMenu = document.getElementById('dropdownMenu');
        
        if (dropdownToggle && dropdownMenu) {
            dropdownToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdownToggle.classList.toggle('active');
                dropdownMenu.classList.toggle('active');
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownToggle.classList.remove('active');
                    dropdownMenu.classList.remove('active');
                }
            });
        }
    });
</script>
@endpush

