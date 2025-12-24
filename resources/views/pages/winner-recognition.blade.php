@extends('layouts.app')

@section('title', 'Winner Recognition & Usage Rights')

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
    }
    
    .winner-recognition-section {
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
    
    .winner-recognition-section::before {
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
    
    .winner-recognition-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
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
                WINNER RECOGNITION<br>& USAGE RIGHTS
            </h1>
            <p class="hero-subtitle">
                Winners of the International Halal Economic Award 2026 will receive exceptional global exposure and branding privileges
            </p>
        </div>
    </div>
</div>

<!-- Winner Recognition Section -->
<div class="winner-recognition-section">
    <div class="winner-recognition-container">
        <!-- Content Cards Grid -->
        <div class="why-cards-grid">
        <!-- Card A: Awards Trophy & Certificate -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image-section" style="background-image: url('https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=800&q=80');">
                        <div class="card-glassmorphism-container">
                            <h3 class="card-title">AWARDS TROPHY & CERTIFICATE</h3>
                            <p class="card-subtitle">Click to learn more</p>
                            <div class="card-icon-badge-small">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                    <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                    <path d="M4 22h16"></path>
                                    <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                    <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                    <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">AWARDS TROPHY & CERTIFICATE</h3>
                    <p class="card-description">Each recipient will be awarded:</p>
                    <ul class="card-list">
                        <li>A premium, specially designed trophy</li>
                        <li>Official certification of achievement</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card B: Digital & Media Recognition -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image-section" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80');">
                        <div class="card-glassmorphism-container">
                            <h3 class="card-title">DIGITAL & MEDIA RECOGNITION</h3>
                            <p class="card-subtitle">Click to learn more</p>
                            <div class="card-icon-badge-small">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"></path>
                                    <path d="M18 14h-8"></path>
                                    <path d="M15 18h-5"></path>
                                    <path d="M10 6h8v4h-8V6Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">DIGITAL & MEDIA RECOGNITION</h3>
                    <p class="card-description">Winners will be featured across:</p>
                    <ul class="card-list">
                        <li>WIED & IHEC official website</li>
                        <li>Halal Economy Magazine</li>
                        <li>Social media announcements</li>
                        <li>Press releases</li>
                        <li>Partner media platforms</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card C: Rights to Use the Official Winner Seal -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image-section" style="background-image: url('https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=800&q=80');">
                        <div class="card-glassmorphism-container">
                            <h3 class="card-title">RIGHTS TO USE THE OFFICIAL WINNER SEAL</h3>
                            <p class="card-subtitle">Click to learn more</p>
                            <div class="card-icon-badge-small">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="9 12 11 14 15 10"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">RIGHTS TO USE THE OFFICIAL WINNER SEAL</h3>
                    <p class="card-description">Award recipients may use the International Halal Economic Award Winner Seal on:</p>
                    <ul class="card-list">
                        <li>Packaging</li>
                        <li>Websites</li>
                        <li>Advertising</li>
                        <li>Marketing campaigns</li>
                        <li>Investor decks</li>
                        <li>Trade materials</li>
                    </ul>
                    <p class="card-description" style="margin-top: 0.75rem; font-weight: 600; color: var(--halal-gold);">Winning brands may state:</p>
                    <p class="card-description" style="font-style: italic; margin-top: 0.5rem;">"WINNER OF THE INTERNATIONAL HALAL ECONOMIC AWARD 2026 – [CATEGORY]"</p>
                </div>
            </div>
        </div>

        <!-- Card D: Featured Case Listing -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image-section" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&q=80');">
                        <div class="card-glassmorphism-container">
                            <h3 class="card-title">FEATURED CASE LISTING</h3>
                            <p class="card-subtitle">Click to learn more</p>
                            <div class="card-icon-badge-small">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21l-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">FEATURED CASE LISTING</h3>
                    <p class="card-description">Top winners will be showcased in the International Halal Economic Award Casebook, a global publication distributed to:</p>
                    <ul class="card-list">
                        <li>Ministries & Government Agencies</li>
                        <li>International Buyers</li>
                        <li>Halal Certification Bodies</li>
                        <li>Investors</li>
                        <li>Industry Councils</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card E: Long-Term Recognition -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image-section" style="background-image: url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=800&q=80');">
                        <div class="card-glassmorphism-container">
                            <h3 class="card-title">LONG-TERM RECOGNITION</h3>
                            <p class="card-subtitle">Click to learn more</p>
                            <div class="card-icon-badge-small">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="20" x2="12" y2="10"></line>
                                    <line x1="18" y1="20" x2="18" y2="4"></line>
                                    <line x1="6" y1="20" x2="6" y2="16"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">LONG-TERM RECOGNITION</h3>
                    <p class="card-description">Winners will remain listed permanently in the:</p>
                    <ul class="card-list">
                        <li>International Halal Economic Award Winners Archive</li>
                        <li>Digital Hall of Fame</li>
                    </ul>
                    <p class="card-description" style="margin-top: 0.75rem; font-style: italic; color: var(--halal-gold);">This ensures sustained visibility well beyond the awards event</p>
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
    gap: 1.25rem;
    margin-top: 2rem;
}

.flip-card {
    background-color: transparent;
    width: 100%;
    height: 320px;
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
    background: transparent;
    border: 1px solid rgba(212, 175, 55, 0.3);
    display: flex;
    flex-direction: column;
}

.flip-card-back {
    background: rgba(0, 0, 0, 0.95);
    border: 1px solid rgba(212, 175, 55, 0.3);
    color: #ffffff;
    transform: rotateY(180deg);
    padding: 1.25rem;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    overflow: hidden;
    text-align: left;
    border-radius: 15px;
}

.card-image-section {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.card-glassmorphism-container {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    min-width: 100%;
    max-width: 100%;
    background: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-top: 1px solid rgba(212, 175, 55, 0.2);
    padding: 1.25rem;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    border-radius: 0 0 15px 15px;
    box-sizing: border-box;
    margin: 0;
    transform: translateX(0);
}

.card-icon-badge-small {
    position: absolute;
    bottom: 1.25rem;
    right: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    z-index: 2;
    margin: 0;
}

.card-icon-badge-small svg {
    width: 1.3rem;
    height: 1.3rem;
    stroke: var(--halal-gold);
    stroke-width: 2;
    fill: none;
}

.flip-card:hover .card-icon-badge-small svg {
    transform: scale(1.1);
    stroke: #f4d03f;
}

.card-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 0.9rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
    text-align: left;
    line-height: 1.3;
    letter-spacing: 0.3px;
    padding-right: 2.5rem;
}

.card-subtitle {
    color: var(--halal-gold);
    font-size: 0.75rem;
    font-weight: 600;
    margin: 0;
    text-align: left;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    position: relative;
    transition: all 0.3s ease;
    padding-right: 2.5rem;
    padding-bottom: 0.75rem;
}

.card-subtitle::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 2px;
    background: var(--halal-gold);
    transition: all 0.3s ease;
}

.flip-card:hover .card-subtitle {
    color: #f4d03f;
}

.flip-card:hover .card-subtitle::after {
    background: #f4d03f;
    width: 80px;
}

.card-title-back {
    font-family: 'Montserrat', sans-serif;
    font-size: 0.85rem;
    font-weight: 700;
    color: var(--halal-gold);
    margin-bottom: 0.75rem;
    line-height: 1.2;
    text-align: left;
    padding: 0;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}

.card-description {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.4;
    margin-bottom: 0.75rem;
    font-size: 0.7rem;
    text-align: left;
    padding: 0;
}

.card-list {
    list-style: none;
    padding: 0;
    margin: 0.5rem 0 0.5rem 0;
    text-align: left;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 0.35rem;
}

.card-list li {
    position: relative;
    padding: 0;
    margin-bottom: 0;
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.68rem;
    line-height: 1.3;
    text-align: left;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.5rem;
    padding-left: 0;
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
    
    .winner-recognition-section {
        padding: 2rem 1rem;
    }
    
    .why-cards-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .flip-card {
        height: 360px;
    }
    
    .flip-card-back {
        padding: 1rem;
    }
    
    .card-title-back {
        font-size: 0.75rem;
        margin-bottom: 0.5rem;
    }
    
    .card-description {
        font-size: 0.65rem;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }
    
    .card-list {
        margin: 0.4rem 0 0.4rem 0;
        gap: 0.3rem;
    }
    
    .card-list li {
        font-size: 0.62rem;
        line-height: 1.2;
    }
    
    .card-glassmorphism-container {
        padding: 1rem;
    }
    
    .card-title {
        font-size: 0.85rem;
        padding-right: 2rem;
    }
    
    .card-subtitle {
        font-size: 0.7rem;
        padding-right: 2rem;
    }
    
    .card-icon-badge-small {
        bottom: 1rem;
        right: 1rem;
    }
    
    .card-icon-badge-small svg {
        width: 1.1rem;
        height: 1.1rem;
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
