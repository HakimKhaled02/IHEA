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
        font-size: clamp(1.2rem, 2.5vw, 1.8rem);
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        font-weight: 400;
        max-width: 800px;
        margin: 0 auto 3rem;
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
                                    <i class="fas fa-trophy"></i>
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
                                    <i class="fas fa-check-circle"></i>
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
                                    <i class="fas fa-handshake"></i>
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
                                    <i class="fas fa-flag"></i>
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
                                    <i class="fas fa-map-marked-alt"></i>
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
                                    <i class="fas fa-chart-line"></i>
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
                                    <i class="fas fa-users"></i>
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
                                    <i class="fas fa-newspaper"></i>
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
                                    <i class="fas fa-bookmark"></i>
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

.card-icon-badge i {
    font-size: 2.2rem;
    color: var(--halal-gold);
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
    line-height: 1;
    opacity: 0.95;
}

.flip-card:hover .card-icon-badge i {
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
