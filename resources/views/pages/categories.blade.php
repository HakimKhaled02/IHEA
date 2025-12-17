@extends('layouts.app')

@section('title', 'Award Categories')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Montserrat', sans-serif;
        background: linear-gradient(135deg, #0a0a0a 0%, #064e3b 50%, #0a0a0a 100%);
        color: #ffffff;
        overflow-x: hidden;
    }
    
    .full-width-section {
        width: 100vw;
        margin-left: calc(50% - 50vw);
        position: relative;
    }
    
    .hero-full {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #000000;
        border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        position: relative;
        overflow: hidden;
    }
    
    .hero-content {
        text-align: center;
        z-index: 2;
        position: relative;
        padding: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }
    
    .hero-title {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(2.5rem, 6vw, 5rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, #d4af37, #f4e4bc, #d4af37);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: drop-shadow(0 4px 8px rgba(212, 175, 55, 0.4));
        text-shadow: 0 0 30px rgba(212, 175, 55, 0.3);
        letter-spacing: -0.05em;
    }
    
    .hero-subtitle {
        font-size: clamp(1.2rem, 3vw, 1.8rem);
        font-weight: 300;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 3rem;
        line-height: 1.4;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .hero-badge {
        display: inline-block;
        background: rgba(212, 175, 55, 0.1);
        border: 1px solid rgba(212, 175, 55, 0.3);
        padding: 1rem 3rem;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: rgba(212, 175, 55, 0.9);
        animation: borderGlow 3s ease-in-out infinite;
        transition: all 0.3s ease;
    }
    
    .hero-badge:hover {
        background: rgba(212, 175, 55, 0.2);
        transform: translateY(-2px);
    }
    
    @keyframes borderGlow {
        0%, 100% { border-color: rgba(212, 175, 55, 0.3); }
        50% { border-color: rgba(212, 175, 55, 0.6); }
    }
    
    .categories-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 4rem 2rem;
    }
    
    .categories-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }
    
    .category-item {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 2rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .category-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, 
            transparent 0%, 
            rgba(212, 175, 55, 0.6) 50%, 
            transparent 100%);
    }
    
    .category-item:hover {
        background: rgba(255, 255, 255, 0.04);
        border-color: rgba(212, 175, 55, 0.4);
        transform: translateY(-4px);
        box-shadow: 0 20px 60px rgba(212, 175, 55, 0.2);
    }
    
    .category-item h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 1rem;
        line-height: 1.3;
    }
    
    .category-item p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        font-size: 0.95rem;
    }
    
    @media (max-width: 768px) {
        .categories-list {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .hero-full {
            min-height: 70vh;
            padding: 2rem 1rem;
        }
        
        .hero-title {
            font-size: clamp(2rem, 8vw, 3rem);
        }
        
        .hero-subtitle {
            font-size: clamp(1rem, 4vw, 1.4rem);
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
            z-index: -1;
        "></div>
        
        <div class="hero-content">
            <div class="hero-badge">
                International Halal Economic Award 2026
            </div>
            <h1 class="hero-title">
                Award Categories
            </h1>
            <p class="hero-subtitle">
                15 prestigious categories recognizing excellence across the global Halal economy
            </p>
        </div>
    </div>
</div>

<!-- Categories Content -->
<div class="categories-container">
    <div class="categories-list">
        <div class="category-item">
            <h3>1. Global Halal Industry Leadership Award</h3>
            <p>Recognising outstanding leadership that drives significant advancement of the global Halal Economy.</p>
        </div>
        
        <div class="category-item">
            <h3>2. Excellence in Halal Certification & Compliance Award</h3>
            <p>Honouring organisations that uphold the highest standards of Halal integrity, governance, and compliance.</p>
        </div>
        
        <div class="category-item">
            <h3>3. Halal Innovation & Technology Transformation Award</h3>
            <p>Celebrating groundbreaking advancements in Halal digitalisation, blockchain, AI, IoT, or automation.</p>
        </div>
        
        <div class="category-item">
            <h3>4. Outstanding Halal Exporter of the Year Award</h3>
            <p>Acknowledging globally competitive Halal brands with exceptional export performance.</p>
        </div>
        
        <div class="category-item">
            <h3>5. Halal Sustainability & ESG Leadership Award</h3>
            <p>Recognising organisations integrating Halal, sustainability, and ESG principles with measurable impact.</p>
        </div>
        
        <div class="category-item">
            <h3>6. Halal Supply Chain & Logistics Excellence Award</h3>
            <p>Honouring leaders in Halal logistics, cold chain assurance, and international traceability.</p>
        </div>
        
        <div class="category-item">
            <h3>7. Halal F&B Excellence Award</h3>
            <p>Celebrating exceptional quality, innovation, and market impact in Halal food and beverage production.</p>
        </div>
        
        <div class="category-item">
            <h3>8. Halal Pharmaceuticals & Health Products Excellence Award</h3>
            <p>Highlighting leadership in Halal pharmaceuticals, nutraceuticals, medical devices, and wellness solutions.</p>
        </div>
        
        <div class="category-item">
            <h3>9. Halal Cosmetics & Personal Care Excellence Award</h3>
            <p>Recognising Halal-certified brands known for innovation, safety, and global competitiveness.</p>
        </div>
        
        <div class="category-item">
            <h3>10. Halal Digital Economy Pioneer Award</h3>
            <p>Celebrating innovators driving digital platforms, e-commerce, certification technologies, and Halal fintech.</p>
        </div>
        
        <div class="category-item">
            <h3>11. Halal-Friendly Tourism & Hospitality Excellence Award</h3>
            <p>Honouring organisations delivering world-class Muslim-friendly tourism and hospitality services.</p>
        </div>
        
        <div class="category-item">
            <h3>12. Halal SME of the Year Award</h3>
            <p>Acknowledging SMEs achieving outstanding performance, innovation, and international readiness.</p>
        </div>
        
        <div class="category-item">
            <h3>13. Lifetime Achievement Award in the Global Halal Economy</h3>
            <p>Recognising individuals with exceptional long-term contributions to Halal industry development.</p>
        </div>
        
        <div class="category-item">
            <h3>14. Young Halal Entrepreneur Award</h3>
            <p>Celebrating rising leaders under 40 shaping the next wave of Halal economic growth.</p>
        </div>
        
        <div class="category-item">
            <h3>15. Global Halal Education, Research & Knowledge Leadership Award</h3>
            <p>Honouring institutions or individuals advancing Halal research, standards, academia, or policy innovation.</p>
        </div>
    </div>
</div>
@endsection

