@extends('layouts.app')

@section('title', 'IHEA 2026 - Home')

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
                <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
                <span class="btn-text">DOWNLOAD MODULE</span>
            </a>
            <a href="{{ route('eligibility') }}" class="btn btn-tertiary btn-large btn-contact">
                <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                </svg>
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
                    <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    <span class="btn-text">DOWNLOAD MODULE</span>
                </a>
                <a href="{{ route('eligibility') }}" class="dropdown-item">
                    <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
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
            <div class="about-content-column">
                <div class="about-hero">
                    <div class="about-hero-content">
                        <h1 class="about-title">INTERNATIONAL HALAL ECONOMIC AWARD (IHEA) <span class="year-highlight">2026</span></h1>
                        <p class="about-subtitle">Premier Global Platform for Halal Excellence</p>
                    </div>
                </div>

                <div class="about-content">
                    <div class="about-section">
                        <div class="section-header">
                            <svg class="section-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                <path d="M4 22h16"></path>
                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                            </svg>
                            <h3>About IHEA 2026</h3>
                        </div>
                        <p>The International Halal Economic Award (IHEA) 2026 is the premier global platform dedicated to recognizing outstanding achievements across the Halal economy. Established under the flagship International Halal Economy Conference (IHEC) 2026, this prestigious awards programme honors organizations, leaders and innovators who demonstrate excellence in Halal integrity, ethical practices, sustainable development, and impactful market performance.</p>
                    </div>

                    <div class="about-section">
                        <div class="section-header">
                            <svg class="section-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                            <h3>Global Halal Economy</h3>
                        </div>
                        <p>As the Halal industry evolves into a multi-trillion-dollar global force, the demand for trusted brands, compliant systems, sustainable supply chains, and transparent governance has never been greater. The International Halal Economic Award (IHEA) 2026 seeks to highlight and celebrate the individuals and organizations who push boundaries, elevate standards, and contribute meaningfully to the advancement of the global Halal landscape.</p>
                    </div>

                    <div class="about-section">
                        <div class="section-header">
                            <svg class="section-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="18" rx="2" ry="2"></rect>
                                <line x1="7" y1="3" x2="7" y2="21"></line>
                                <line x1="17" y1="3" x2="17" y2="21"></line>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <line x1="2" y1="7" x2="7" y2="7"></line>
                                <line x1="2" y1="17" x2="7" y2="17"></line>
                                <line x1="17" y1="17" x2="22" y2="17"></line>
                                <line x1="17" y1="7" x2="22" y2="7"></line>
                            </svg>
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
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:00 PM</div>
                    <div class="timeline-content">
                        <h3>Arrival of the VVIPs</h3>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:15 PM</div>
                    <div class="timeline-content">
                        <h3>Welcome Address by the Chairman of IIHE–CIHE</h3>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:30 PM</div>
                    <div class="timeline-content">
                        <h3>Official Address by VVIP</h3>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:45 PM</div>
                    <div class="timeline-content">
                        <h3>Official Launch of the International Institute of Halal Economy (IIHE)</h3>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">9:00 PM</div>
                    <div class="timeline-content">
                        <h3>International Artist Performance (Segment 1)</h3>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">9:15 PM</div>
                    <div class="timeline-content">
                        <h3>Presentation of 10 Awards (Halal International Award 2025 – Phase 1)</h3>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">9:45 PM</div>
                    <div class="timeline-content">
                        <h3>International Artist Performance (Segment 2)</h3>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">10:00 PM</div>
                    <div class="timeline-content">
                        <h3>Presentation of 5 Awards (Halal International Award 2025 – Phase 2)</h3>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">10:30 PM</div>
                    <div class="timeline-content">
                        <h3>Group Photo with Award Recipients & VVIPs</h3>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">11:00 PM</div>
                    <div class="timeline-content">
                        <h3>Media Session & Adjournment</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Award Fees Section -->
    <div class="fees-section">
        <div class="max-w-6xl mx-auto px-8 py-8">
            <div class="fees-section-header">
                <h2 class="fees-main-title">
                    AWARD PARTICIPATION FEES & PRESTIGE PACKAGES
                </h2>
                <h3 class="fees-sub-title">International Halal Economic Award <span class="gold-text">2026</span> — Premium Recognition Packages</h3>
                <div class="fees-gold-line"></div>
                <p class="fees-intro-text">
                    The International Halal Economic Award 2026 offers two exclusive award participation categories designed to elevate recipients to the highest levels of global recognition, leadership positioning, and long-term brand prestige.
            </p>
                <p class="fees-intro-text">
                    Each award package provides exceptional visibility, premium seating, and distinguished acknowledgment by national leaders and global Halal authorities.
                </p>
            </div>
            
            <div class="packages-container">
                <!-- Premium Package -->
                <div class="package-card premium">
                    <div class="package-card-header">
                        <div class="package-title-full">GLOBAL HALAL EXCELLENCE AWARD</div>
                        <div class="package-category">PREMIUM CATEGORY</div>
                    <div class="package-price">
                        <span class="currency">RM</span>
                        <span>15,000</span>
                        </div>
                        <div class="package-quote">"The Highest Honor of the International Halal Economic Award 2026"</div>
                    </div>
                    
                    <div class="package-card-body">
                    <p class="package-description">
                        This prestigious package is reserved for organizations and leaders who demonstrate extraordinary contributions and breakthrough achievements within the global Halal ecosystem.
                    </p>
                        
                        <div class="package-benefits-title">Package Benefits:</div>
                    
                    <ul class="benefits-list">
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>AWARD PRESENTATION BY HONORABLE MINISTER</strong><br>
                                A rare and highly prestigious moment where the award recipient receives their accolade directly from a Malaysian Minister or dignitary
                            </span>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M3 10h18"></path><path d="M7 15h.01"></path><path d="M7 20h.01"></path><path d="M17 15h.01"></path><path d="M17 20h.01"></path><path d="M12 15h.01"></path><path d="M12 20h.01"></path></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>VVIP SEATING EXPERIENCE</strong><br>
                                The award recipient will be seated at the VVIP Table, together with Ministers, VIP guests, international leaders, and high-profile dignitaries
                            </span>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="18" rx="2" ry="2"></rect><line x1="6" y1="8" x2="18" y2="8"></line><line x1="6" y1="12" x2="18" y2="12"></line><line x1="6" y1="16" x2="18" y2="16"></line></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>NATIONAL & INTERNATIONAL MEDIA FEATURE</strong><br>
                                Your achievement will be highlighted in: National & International media platforms, Online news portals, Official social media channels of IHEC, WIED & International Halal Awards
                            </span>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>DEDICATED GALA SEATING FOR YOUR GUESTS</strong><br>
                                A full 10-pax Premium Table will be allocated for your family, colleagues, partners, or invited guests
                            </span>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>HALL OF FAME INDUCTION (LIFETIME VISIBILITY)</strong><br>
                                Your organization will be permanently listed in the: WIED Hall of Fame, IHEC 2026 Hall of Honor, International Halal Awards Digital Hall of Fame. This provides evergreen recognition, searchable online visibility, and long-term brand prestige
                            </span>
                        </li>
                    </ul>
                    
                    <div class="package-cta">
                        <a href="#" class="cta-button">Choose Premium Package</a>
                        </div>
                    </div>
                </div>

                <!-- Elite Package -->
                <div class="package-card elite">
                    <div class="package-card-header">
                        <div class="package-title-full">HALAL INDUSTRY DISTINCTION AWARD</div>
                        <div class="package-category">ELITE CATEGORY</div>
                    <div class="package-price">
                        <span class="currency">RM</span>
                        <span>10,000</span>
                        </div>
                        <div class="package-quote">"Honoring High-Impact Leaders, Innovators & Emerging Champions"</div>
                    </div>
                    
                    <div class="package-card-body">
                    <p class="package-description">
                        This exclusive award acknowledges organizations and individuals who have demonstrated strong commitment, performance, and leadership in advancing Halal industry standards.
                    </p>
                        
                        <div class="package-benefits-title">Package Benefits:</div>
                    
                    <ul class="benefits-list">
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>AWARD PRESENTATION BY CEO OR INDUSTRY LEADER</strong><br>
                                Recipients will be honored by respected industry captains, CEOs, or distinguished Halal authorities
                            </span>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M3 10h18"></path><path d="M7 15h.01"></path><path d="M7 20h.01"></path><path d="M17 15h.01"></path><path d="M17 20h.01"></path><path d="M12 15h.01"></path><path d="M12 20h.01"></path></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>VIP SEATING PRIVILEGES</strong><br>
                                Award recipients will be seated at the VIP Table, positioned adjacent to the VVIP area — ensuring premium networking access
                            </span>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>NATIONAL MEDIA ACKNOWLEDGEMENT</strong><br>
                                Your award recognition will be featured in: Major digital media outlets, Official IHEC & WIED social media, Awards publicity campaigns
                            </span>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>EXCLUSIVE TABLE FOR YOUR GUESTS</strong><br>
                                Enjoy a 10-pax VIP Table for family members, guests or corporate representatives
                            </span>
                        </li>
                        
                        <li class="benefit-item">
                            <span class="benefit-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </span>
                            <span class="benefit-text">
                                <strong>HALL OF FAME RECOGNITION (LONG-TERM EXPOSURE)</strong><br>
                                Awardees will be permanently listed in the: WIED Hall of Fame, IHEC 2026 Hall of Honor, International Halal Awards Digital Hall of Fame. This provides evergreen recognition, searchable online visibility, and long-term brand prestige
                            </span>
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
        background-image: url('{{ asset("assets/awardhomepage.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        padding: 2rem 0;
        position: sticky;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        min-height: 100vh;
        z-index: 10;
        display: flex;
        align-items: center;
    }
    
    .fees-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.3);
        z-index: 0;
    }
    
    .fees-section > div {
        position: relative;
        z-index: 1;
        width: 100%;
    }
    
    /* Packages Container */
    .packages-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        position: relative;
        max-width: 1100px;
        margin: 0 auto;
    }
    
    /* Package Card Styles */
    .package-card {
        background: linear-gradient(135deg, #d4af37 0%, #f4d03f 25%, #ffd700 50%, #f4d03f 75%, #d4af37 100%);
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 10px 40px rgba(212, 175, 55, 0.6), 
                    0 0 60px rgba(212, 175, 55, 0.3),
                    inset 0 2px 4px rgba(255, 255, 255, 0.4),
                    inset 0 -2px 4px rgba(0, 0, 0, 0.2);
        max-width: 480px;
        margin: 0 auto;
        border: 2px solid rgba(255, 215, 0, 0.6);
    }
    
    .package-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, 
            transparent 30%, 
            rgba(255, 255, 255, 0.5) 45%, 
            rgba(255, 255, 255, 0.8) 50%, 
            rgba(255, 255, 255, 0.5) 55%, 
            transparent 70%);
        pointer-events: none;
        z-index: 1;
        animation: shine 3s infinite;
    }
    
    @keyframes shine {
        0% {
            transform: translateX(-100%) translateY(-100%) rotate(45deg);
        }
        100% {
            transform: translateX(100%) translateY(100%) rotate(45deg);
        }
    }
    
    .package-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 60%;
        background: linear-gradient(180deg, 
            rgba(255, 255, 255, 0.5) 0%, 
            rgba(255, 255, 255, 0.3) 20%,
            rgba(255, 255, 255, 0.1) 40%,
            transparent 100%);
        pointer-events: none;
        z-index: 1;
    }
    
    .package-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 50px rgba(212, 175, 55, 0.7), 
                    0 0 80px rgba(212, 175, 55, 0.4),
                    inset 0 2px 6px rgba(255, 255, 255, 0.5),
                    inset 0 -2px 6px rgba(0, 0, 0, 0.3);
        border-color: rgba(255, 215, 0, 0.8);
    }
    
    .package-card-header {
        padding: 1.25rem 1.5rem 1rem;
        text-align: center;
        position: relative;
        z-index: 2;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.1) 0%, transparent 100%);
    }
    
    .package-card-body {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 0 1.5rem 1.25rem;
        position: relative;
        z-index: 2;
    }
    
    .package-card.elite {
        background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 25%, #3a3a3a 50%, #2d2d2d 75%, #1a1a1a 100%);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.7), 
                    0 0 60px rgba(0, 0, 0, 0.4),
                    inset 0 2px 4px rgba(255, 255, 255, 0.15),
                    inset 0 -2px 4px rgba(0, 0, 0, 0.5);
        border: 2px solid rgba(255, 255, 255, 0.2);
    }
    
    .package-card.elite::before {
        background: linear-gradient(45deg, 
            transparent 30%, 
            rgba(255, 255, 255, 0.2) 45%, 
            rgba(255, 255, 255, 0.4) 50%, 
            rgba(255, 255, 255, 0.2) 55%, 
            transparent 70%);
    }
    
    .package-card.elite::after {
        background: linear-gradient(180deg, 
            rgba(255, 255, 255, 0.2) 0%, 
            rgba(255, 255, 255, 0.1) 20%,
            rgba(255, 255, 255, 0.05) 40%,
            transparent 100%);
    }
    
    .package-card.elite:hover {
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.8), 
                    0 0 80px rgba(0, 0, 0, 0.5),
                    inset 0 2px 6px rgba(255, 255, 255, 0.2),
                    inset 0 -2px 6px rgba(0, 0, 0, 0.6);
        border-color: rgba(255, 255, 255, 0.3);
    }
    
    .fees-section-header {
        text-align: left;
        margin-bottom: 2.5rem;
        padding: 1.5rem 0;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .fees-main-title {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(1.6rem, 3vw, 2.4rem);
        font-weight: 900;
        color: #ffffff;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        line-height: 1.2;
    }
    
    .fees-sub-title {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(0.95rem, 1.3vw, 1.15rem);
        font-weight: 400;
        color: #ffffff;
        margin-bottom: 1rem;
        line-height: 1.4;
    }
    
    .fees-sub-title .gold-text {
        color: #d4af37;
        font-weight: 700;
    }
    
    .fees-gold-line {
        width: 200px;
        height: 2px;
        background: #d4af37;
        margin-bottom: 1.25rem;
    }
    
    .fees-intro-text {
        font-size: clamp(0.85rem, 1.1vw, 0.95rem);
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        max-width: 900px;
        margin-bottom: 0.85rem;
        font-weight: 300;
    }
    
    .package-title-full {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(0.9rem, 1.2vw, 1.15rem);
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 0.3rem;
        text-transform: uppercase;
        letter-spacing: 0.03em;
        line-height: 1.2;
    }
    
    .package-card.elite .package-title-full {
        color: #ffffff;
    }
    
    .package-category {
        font-size: 0.65rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 0.4rem;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        opacity: 0.8;
    }
    
    .package-card.elite .package-category {
        color: #ffffff;
    }
    
    .package-quote {
        font-size: clamp(0.65rem, 0.85vw, 0.75rem);
        font-style: italic;
        color: #1a1a1a;
        margin-top: 0.35rem;
        line-height: 1.3;
        opacity: 0.9;
    }
    
    .package-card.elite .package-quote {
        color: #ffffff;
    }
    
    .package-price {
        font-size: clamp(1.8rem, 2.5vw, 2.4rem);
        font-weight: 700;
        margin: 0.3rem 0 0;
        display: flex;
        align-items: baseline;
        gap: 0.3rem;
        justify-content: center;
        color: #1a1a1a;
    }
    
    .package-price .currency {
        font-size: clamp(0.9rem, 1.2vw, 1.1rem);
        font-weight: 600;
        color: #1a1a1a;
    }
    
    .package-price span:last-child {
        color: #1a1a1a;
    }
    
    .package-card.elite .package-price,
    .package-card.elite .package-price .currency,
    .package-card.elite .package-price span:last-child {
        color: #ffffff;
    }
    
    .prestige-ribbon {
        display: none;
    }
    
    .package-description {
        font-size: clamp(0.7rem, 0.9vw, 0.8rem);
        line-height: 1.4;
        margin-bottom: 0.75rem;
        color: #1a1a1a;
    }
    
    .package-card.elite .package-description {
        color: rgba(255, 255, 255, 0.9);
    }
    
    .package-benefits-title {
        font-size: clamp(0.75rem, 1vw, 0.85rem);
        font-weight: 700;
        margin-bottom: 0.65rem;
        color: #1a1a1a;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .package-card.elite .package-benefits-title {
        color: #ffffff;
    }
    
    .benefits-list {
        list-style: none;
        margin-bottom: 1.25rem;
        flex: 1;
    }
    
    .benefit-item {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        gap: 0.65rem;
        margin-bottom: 0.6rem;
        padding: 0;
    }
    
    .benefit-icon {
        flex-shrink: 0;
        margin-top: 0.1rem;
    }
    
    .benefit-icon svg {
        width: 18px;
        height: 18px;
    }
    
    .benefit-text {
        font-size: clamp(0.7rem, 0.85vw, 0.8rem);
        line-height: 1.4;
        flex: 1;
        color: #1a1a1a;
        text-align: left;
    }
    
    .benefit-text strong {
        display: block;
        margin-bottom: 0.2rem;
        font-size: clamp(0.75rem, 0.9vw, 0.85rem);
    }
    
    .package-card.elite .benefit-text {
        color: rgba(255, 255, 255, 0.95);
    }
    
    .package-card.elite .benefit-text strong {
        color: #ffffff;
    }
    
    .benefit-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 20px;
        height: 20px;
        flex-shrink: 0;
        margin-top: 0.1rem;
    }
    
    .benefit-icon svg {
        width: 1.2rem;
        height: 1.2rem;
        stroke-width: 2;
        fill: none;
    }
    
    .package-card.premium .benefit-icon svg {
        stroke: #1a1a1a;
    }
    
    .package-card.elite .benefit-icon svg {
        stroke: #ffffff;
    }
    
    .package-cta {
        margin-top: auto;
        padding-top: 1.5rem;
        text-align: center;
    }
    
    .cta-button {
        display: inline-block;
        padding: 0.85rem 2rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.85rem;
        text-align: center;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        width: auto;
        margin: 0 auto;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3), 
                    inset 0 2px 4px rgba(255, 255, 255, 0.4),
                    inset 0 -2px 4px rgba(0, 0, 0, 0.2);
    }
    
    .cta-button::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, 
            transparent 30%, 
            rgba(255, 255, 255, 0.4) 45%, 
            rgba(255, 255, 255, 0.6) 50%, 
            rgba(255, 255, 255, 0.4) 55%, 
            transparent 70%);
        pointer-events: none;
        animation: buttonShine 2s infinite;
    }
    
    @keyframes buttonShine {
        0% {
            transform: translateX(-100%) translateY(-100%) rotate(45deg);
        }
        100% {
            transform: translateX(100%) translateY(100%) rotate(45deg);
        }
    }
    
    .package-card.premium .cta-button {
        background: linear-gradient(135deg, #f4d03f 0%, #ffd700 50%, #d4af37 100%);
        color: #1a1a1a;
        border: 1px solid rgba(255, 215, 0, 0.5);
    }
    
    .package-card.premium .cta-button:hover {
        background: linear-gradient(135deg, #f5d547 0%, #ffd700 50%, #dbb844 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.4), 
                    inset 0 2px 6px rgba(255, 255, 255, 0.5),
                    inset 0 -2px 6px rgba(0, 0, 0, 0.3);
    }
    
    .package-card.elite .cta-button {
        background: linear-gradient(135deg, #3a3a3a 0%, #4a4a4a 50%, #2d2d2d 100%);
        color: #ffffff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5), 
                    inset 0 2px 4px rgba(255, 255, 255, 0.15),
                    inset 0 -2px 4px rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .package-card.elite .cta-button:hover {
        background: linear-gradient(135deg, #4a4a4a 0%, #5a5a5a 50%, #3a3a3a 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.6), 
                    inset 0 2px 6px rgba(255, 255, 255, 0.2),
                    inset 0 -2px 6px rgba(0, 0, 0, 0.5);
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

