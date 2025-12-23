@extends('layouts.app')

@section('title', 'Why The International Halal Economic Award (IHEA) Matter')

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
        font-size: clamp(1rem, 1.8vw, 1.4rem);
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.5;
        font-weight: 400;
        max-width: 900px;
        margin: 0 auto 3rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .why-matters-section {
        width: 100%;
        position: relative;
        background: #000000;
        background-image: url('{{ asset("assets/mission2.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        padding: 4rem 2rem;
    }
    
    .why-matters-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.85);
        z-index: 0;
        pointer-events: none;
    }
    
    .why-matters-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }
    
    /* Ensure hamburger menu is above hero section and clickable */
    .hamburger-menu {
        z-index: 9999 !important;
        position: fixed !important;
        pointer-events: auto !important;
    }
    
    /* Ensure menu overlay is above hero section */
    .menu-overlay {
        z-index: 9998 !important;
    }
    
    /* Ensure hero section doesn't create a blocking stacking context */
    .full-width-section {
        z-index: 1;
    }
    
    .hero-full {
        z-index: 1;
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
            <div class="hero-badge">
                International Halal Economic Award 2026
            </div>
            <h1 class="hero-title">
                WHY THE IHEA<br>MATTERS
            </h1>
            <p class="hero-subtitle">
                In today's interconnected marketplace, Halal represents a global movement toward ethics, sustainability, transparency, and trust
            </p>
        </div>
    </div>
</div>

<!-- Why Matters Section -->
<div class="why-matters-section">
    <div class="why-matters-container">
        <!-- Content Cards Grid -->
        <div class="why-cards-grid">
        <!-- Card A -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-top-content">
                                <div class="card-icon-badge">
                                    <div class="icon-container">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                            <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                            <path d="M4 22h16"></path>
                                            <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                            <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                            <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="card-title">UNMATCHED GLOBAL RECOGNITION</h3>
                            </div>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">UNMATCHED GLOBAL RECOGNITION</h3>
                    <p class="card-description">Winning at the International Halal Economic Award (IHEA) sets a powerful standard of excellence, strengthening your organization's global reputation and credibility among buyers, investors, regulators, and consumers.</p>
                </div>
            </div>
        </div>

        <!-- Card B -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage1.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-top-content">
                                <div class="card-icon-badge">
                                    <div class="icon-container">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="9 12 11 14 15 10"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="card-title">A BENCHMARK FOR HALAL EXCELLENCE</h3>
                            </div>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">A BENCHMARK FOR HALAL EXCELLENCE</h3>
                    <p class="card-description">The Awards function as a prestigious benchmark for:</p>
                    <ul class="card-list">
                        <li>Halal compliance</li>
                        <li>Ethical governance</li>
                        <li>Sustainability</li>
                        <li>Quality control</li>
                        <li>Innovation and impact</li>
                    </ul>
                    <p class="card-description">This demonstrates that your organization meets — and exceeds — global expectations</p>
                </div>
            </div>
        </div>

        <!-- Card C -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-top-content">
                                <div class="card-icon-badge">
                                    <div class="icon-container">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M11 12h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 14"></path>
                                            <path d="M7 18h1.5a2 2 0 0 0 2-2v-1.5c0-.6.4-1.5 1-1.5h2c.6 0 1 .9 1 1.5V16a2 2 0 0 0 2 2H17"></path>
                                            <path d="M13 12h2a2 2 0 1 1 0 4h-3c-.6 0-1.1-.2-1.4-.6L3 10"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="card-title">STRENGTHEN TRUST WITH CONSUMERS & PARTNERS</h3>
                            </div>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">STRENGTHEN TRUST WITH CONSUMERS & PARTNERS</h3>
                    <p class="card-description">In a world where trust drives decisions, receiving an International Halal Economic Award (IHEA) signals:</p>
                    <ul class="card-list">
                        <li>Integrity</li>
                        <li>Reliability</li>
                        <li>Authenticity</li>
                        <li>Consistent Halal Compliance</li>
                        <li>Excellence In Delivery</li>
                    </ul>
                    <p class="card-description">Trust is a competitive advantage, and winners gain it instantly</p>
                </div>
            </div>
        </div>

        <!-- Card D -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage1.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-top-content">
                                <div class="card-icon-badge">
                                    <div class="icon-container">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                            <line x1="4" y1="22" x2="4" y2="15"></line>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="card-title">COMPETITIVE DIFFERENTIATION</h3>
                            </div>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">COMPETITIVE DIFFERENTIATION</h3>
                    <p class="card-description">Award recipients stand apart from competitors with:</p>
                    <ul class="card-list">
                        <li>Superior Visibility</li>
                        <li>Market Differentiation</li>
                        <li>Enhanced Brand Authority</li>
                    </ul>
                    <p class="card-description">A Halal award win strengthens your unique value proposition domestically and internationally</p>
                </div>
            </div>
        </div>

        <!-- Card E -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-top-content">
                                <div class="card-icon-badge">
                                    <div class="icon-container">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8c0 4.5-6 9-6 9s-6-4.5-6-9a6 6 0 0 1 12 0"></path>
                                            <circle cx="12" cy="8" r="2"></circle>
                                            <path d="M8.835 14H5a1 1 0 0 0-.9.7l-2 6c-.1.3 0 .6.2.8l.8.8c.2.2.5.3.7.2l2.1-.6"></path>
                                            <path d="M15.165 14H19a1 1 0 0 1 .9.7l2 6c.1.3 0 .6-.2.8l-.8.8c-.2.2-.5.3-.7.2l-2.1-.6"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="card-title">GAIN ACCESS TO GLOBAL MARKETS</h3>
                            </div>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">GAIN ACCESS TO GLOBAL MARKETS</h3>
                    <p class="card-description">Winning attracts:</p>
                    <ul class="card-list">
                        <li>Distributors</li>
                        <li>Export Partners</li>
                        <li>International Agencies</li>
                        <li>GCC, ASEAN, Africa, and EU buyers</li>
                    </ul>
                    <p class="card-description">Doors open for new market expansion once your brand carries globally recognized Halal excellence credentials</p>
                </div>
            </div>
        </div>

        <!-- Card F -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage1.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-top-content">
                                <div class="card-icon-badge">
                                    <div class="icon-container">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="12" y1="20" x2="12" y2="10"></line>
                                            <line x1="18" y1="20" x2="18" y2="4"></line>
                                            <line x1="6" y1="20" x2="6" y2="16"></line>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="card-title">ATTRACT INVESTORS & FUNDING OPPORTUNITIES</h3>
                            </div>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">ATTRACT INVESTORS & FUNDING OPPORTUNITIES</h3>
                    <p class="card-description">Investors trust brands with:</p>
                    <ul class="card-list">
                        <li>Verified Halal Integrity</li>
                        <li>Ethical And Sustainable Operations</li>
                        <li>Proven Market Performance</li>
                    </ul>
                    <p class="card-description">Winning helps secure capital, partnerships, and long-term investment growth</p>
                </div>
            </div>
        </div>

        <!-- Card G -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-top-content">
                                <div class="card-icon-badge">
                                    <div class="icon-container">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="card-title">TALENT ATTRACTION & EMPLOYER BRANDING</h3>
                            </div>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">TALENT ATTRACTION & EMPLOYER BRANDING</h3>
                    <p class="card-description">Recognized organizations attract:</p>
                    <ul class="card-list">
                        <li>Higher-Quality Talent</li>
                        <li>More Committed Employees</li>
                        <li>Strong Organizational Reputation</li>
                    </ul>
                    <p class="card-description">Employees feel proud to work for an award-winning institution</p>
                </div>
            </div>
        </div>

        <!-- Card H -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage1.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-top-content">
                                <div class="card-icon-badge">
                                    <div class="icon-container">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"></path>
                                            <path d="M18 14h-8"></path>
                                            <path d="M15 18h-5"></path>
                                            <path d="M10 6h8v4h-8V6Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="card-title">MEDIA VISIBILITY & BRAND ELEVATION</h3>
                            </div>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">MEDIA VISIBILITY & BRAND ELEVATION</h3>
                    <p class="card-description">Winners receive extensive publicity through:</p>
                    <ul class="card-list">
                        <li>press releases</li>
                        <li>media interviews</li>
                        <li>social media campaigns</li>
                        <li>partnerships with Halal networks</li>
                    </ul>
                    <p class="card-description">Your story becomes part of the global Halal narrative</p>
                </div>
            </div>
        </div>

        <!-- Card I -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-top-content">
                                <div class="card-icon-badge">
                                    <div class="icon-container">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19 21l-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="card-title">LEGACY & LONG-TERM VALUE</h3>
                            </div>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">LEGACY & LONG-TERM VALUE</h3>
                    <p class="card-description">Winners are permanently listed in:</p>
                    <ul class="card-list">
                        <li>The International Halal Economic Award (IHEA) Archive</li>
                        <li>Digital Platforms</li>
                        <li>Global Publications</li>
                        <li>IHEC Promotional Materials</li>
                    </ul>
                    <p class="card-description">This establishes a legacy of excellence that strengthens your organization for years to come</p>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>

<style>
.why-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-top: 2rem;
}

.flip-card {
    background-color: transparent;
    width: 100%;
    height: 300px;
    perspective: 1000px;
    cursor: pointer;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
}

.flip-card.flipped .flip-card-inner {
    transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.flip-card-front {
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(5, 150, 105, 0.1));
    border: 1px solid rgba(212, 175, 55, 0.3);
}

.flip-card-back {
    background: rgba(0, 0, 0, 0.9);
    border: 1px solid rgba(212, 175, 55, 0.3);
    color: #ffffff;
    transform: rotateY(180deg);
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    overflow: hidden;
    text-align: center;
}

.card-image {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    position: relative;
}

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.15);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
}

.card-top-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 0.5rem;
}

.card-icon-badge {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
    position: relative;
}

.flip-card:hover .card-icon-badge {
    transform: translateY(-3px);
}

.icon-container {
    width: 4rem;
    height: 4rem;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(10px);
    border: 2px solid var(--halal-gold);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
}

.card-icon-badge svg {
    width: 2.2rem;
    height: 2.2rem;
    stroke: var(--halal-gold);
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
    opacity: 0.95;
}

.flip-card:hover .icon-container {
    background: rgba(0, 0, 0, 0.8);
    border-color: var(--halal-gold);
    box-shadow: 0 6px 20px rgba(212, 175, 55, 0.5);
    transform: scale(1.05);
}

.flip-card:hover .card-icon-badge svg {
    opacity: 1;
    transform: scale(1.05);
}

.card-title {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
    text-align: center;
    line-height: 1.3;
}

.card-top-content .card-title {
    margin-top: 0;
}

.card-subtitle {
    color: #ffffff;
    font-size: 0.95rem;
    font-weight: 600;
    margin: 0;
    padding: 0.75rem 0 1rem 0;
    width: 100%;
    text-align: center;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
    position: relative;
    transition: all 0.3s ease;
}

.card-subtitle::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 2px;
    background: linear-gradient(to right, transparent, var(--halal-gold), transparent);
    border-radius: 2px;
    box-shadow: 0 0 10px rgba(212, 175, 55, 0.6);
}

.flip-card:hover .card-subtitle {
    color: var(--halal-gold);
    text-shadow: 0 2px 10px rgba(212, 175, 55, 0.8);
}

.flip-card:hover .card-subtitle::after {
    width: 120px;
    box-shadow: 0 0 15px rgba(212, 175, 55, 0.8);
}

.card-title-back {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--halal-gold);
    margin-bottom: 0.5rem;
    line-height: 1.2;
    text-align: center;
    padding: 0;
}

.card-description {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.4;
    margin-bottom: 0.5rem;
    font-size: 0.75rem;
    text-align: center;
    padding: 0;
}

.card-list {
    list-style: none;
    padding: 0;
    margin: 0.25rem 0 0.5rem 0;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card-list li {
    position: relative;
    padding: 0;
    margin-bottom: 0.25rem;
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.7rem;
    line-height: 1.3;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.card-list li:before {
    content: '✓';
    color: var(--halal-gold);
    font-weight: bold;
    flex-shrink: 0;
}

@media (max-width: 1024px) {
    .why-cards-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .hero-full {
        min-height: 70vh;
        padding: 2rem 1rem;
    }
    
    .why-matters-section {
        padding: 2rem 1rem;
    }
    
    .why-cards-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .flip-card {
        height: 350px;
    }
}
</style>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const flipCards = document.querySelectorAll('.flip-card');
    
    flipCards.forEach(card => {
        card.addEventListener('click', function() {
            this.classList.toggle('flipped');
        });
    });
});
</script>
@endpush
