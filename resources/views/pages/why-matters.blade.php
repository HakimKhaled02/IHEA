@extends('layouts.app')

@section('title', 'Why The International Halal Economic Award (IHEA) Matter')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700;800;900&display=swap');
    
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
        font-family: 'Inter', sans-serif;
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
        font-family: 'Space Grotesk', sans-serif;
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
    
    .why-matters-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem;
    }

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
                International Halal Economic Awards 2026
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
<div class="why-matters-container">

    <!-- Content Cards Grid -->
    <div class="why-cards-grid">
        <!-- Card A -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-trophy"></i>
                            </div>
                            <h3 class="card-title">UNMATCHED GLOBAL RECOGNITION</h3>
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
                    <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <h3 class="card-title">A BENCHMARK FOR HALAL EXCELLENCE</h3>
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
                            <div class="card-icon-badge">
                                <i class="far fa-handshake"></i>
                            </div>
                            <h3 class="card-title">STRENGTHEN TRUST WITH CONSUMERS & PARTNERS</h3>
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
                    <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-flag"></i>
                            </div>
                            <h3 class="card-title">COMPETITIVE DIFFERENTIATION</h3>
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
                            <div class="card-icon-badge">
                                <i class="far fa-map-marked-alt"></i>
                            </div>
                            <h3 class="card-title">GAIN ACCESS TO GLOBAL MARKETS</h3>
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
                    <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-chart-line"></i>
                            </div>
                            <h3 class="card-title">ATTRACT INVESTORS & FUNDING OPPORTUNITIES</h3>
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
                            <div class="card-icon-badge">
                                <i class="far fa-users"></i>
                            </div>
                            <h3 class="card-title">TALENT ATTRACTION & EMPLOYER BRANDING</h3>
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
                    <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-newspaper"></i>
                            </div>
                            <h3 class="card-title">MEDIA VISIBILITY & BRAND ELEVATION</h3>
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
                            <div class="card-icon-badge">
                                <i class="far fa-bookmark"></i>
                            </div>
                            <h3 class="card-title">LEGACY & LONG-TERM VALUE</h3>
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

<style>
.why-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.flip-card {
    background-color: transparent;
    width: 100%;
    height: 400px;
    perspective: 1000px;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
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
    padding: 2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
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
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 2rem;
}

.card-icon-badge {
    width: 60px;
    height: 60px;
    background: rgba(212, 175, 55, 0.2);
    border: 2px solid var(--halal-gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
}

.card-icon-badge i {
    font-size: 1.5rem;
    color: var(--halal-gold);
}

.card-title {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 0.5rem;
    text-align: center;
}

.card-subtitle {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
}

.card-title-back {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--halal-gold);
    margin-bottom: 1rem;
}

.card-description {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    margin-bottom: 1rem;
}

.card-list {
    list-style: none;
    padding: 0;
    margin: 1rem 0;
}

.card-list li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 0.5rem;
    color: rgba(255, 255, 255, 0.9);
}

.card-list li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--halal-gold);
    font-weight: bold;
}

@media (max-width: 768px) {
    .hero-full {
        min-height: 70vh;
        padding: 2rem 1rem;
    }
    
    .why-matters-container {
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
@endpush

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
@endsection
