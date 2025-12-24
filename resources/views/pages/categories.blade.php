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
        background: #000000;
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
        width: 100vw;
        margin-left: calc(50% - 50vw);
        padding: 2.5rem 2rem;
        position: relative;
        z-index: 1;
        background-image: url('../assets/mission2.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    
    .categories-container::before {
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
    
    .categories-container > * {
        position: relative;
        z-index: 1;
    }
    
    .categories-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.25rem;
        margin-top: 1.5rem;
        position: relative;
        z-index: 1;
    }
    
    .category-item {
        background: rgba(0, 0, 0, 0.6);
        border: 2px solid rgba(212, 175, 55, 0.4);
        border-left: 4px solid #d4af37;
        border-radius: 16px;
        padding: 1.5rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(10px);
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
            rgba(212, 175, 55, 0.8) 50%, 
            transparent 100%);
    }
    
    .category-item:hover {
        background: rgba(0, 0, 0, 0.8);
        border-color: rgba(212, 175, 55, 0.7);
        border-left-color: #d4af37;
        transform: translateY(-4px);
        box-shadow: 0 20px 60px rgba(212, 175, 55, 0.4);
    }
    
    .category-item h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 0.75rem;
        line-height: 1.3;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .category-icon {
        font-size: 1.5rem;
        color: #d4af37;
        min-width: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .category-icon svg {
        width: 1.5rem;
        height: 1.5rem;
        stroke: #d4af37;
        stroke-width: 2;
        fill: none;
    }
    
    .category-item p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        font-size: 0.875rem;
    }
    
    @media (max-width: 1024px) {
        .categories-list {
            grid-template-columns: repeat(2, 1fr);
        }
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
                AWARD CATEGORIES
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
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg> Global Halal Industry Leadership Award</h3>
            <p>Recognising outstanding leadership that drives significant advancement of the global Halal Economy.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg> Excellence in Halal Certification & Compliance Award</h3>
            <p>Honouring organisations that uphold the highest standards of Halal integrity, governance, and compliance.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg> Halal Innovation & Technology Transformation Award</h3>
            <p>Celebrating groundbreaking advancements in Halal digitalisation, blockchain, AI, IoT, or automation.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path><path d="M7 12h10"></path></svg> Outstanding Halal Exporter of the Year Award</h3>
            <p>Acknowledging globally competitive Halal brands with exceptional export performance.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path></svg> Halal Sustainability & ESG Leadership Award</h3>
            <p>Recognising organisations integrating Halal, sustainability, and ESG principles with measurable impact.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path><path d="M15 18H9"></path><path d="M19 18h2a1 1 0 0 0 1-1v-3.28a1 1 0 0 0-.684-.948l-1.923-.641a1 1 0 0 1-.578-.502L17 10V8a2 2 0 0 0-2-2h-1"></path><circle cx="7" cy="18" r="2"></circle><path d="M9 18h6"></circle><circle cx="17" cy="18" r="2"></circle></svg> Halal Supply Chain & Logistics Excellence Award</h3>
            <p>Honouring leaders in Halal logistics, cold chain assurance, and international traceability.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"></path><path d="M7 2v20"></path><path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3v0"></path><path d="M21 15v7"></path></svg> Halal F&B Excellence Award</h3>
            <p>Celebrating exceptional quality, innovation, and market impact in Halal food and beverage production.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 20h3a1.5 1.5 0 0 0 1.5-1.5v-3A1.5 1.5 0 0 0 13.5 14h-3A1.5 1.5 0 0 0 9 15.5v3A1.5 1.5 0 0 0 10.5 20Z"></path><path d="M16 20V9a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v11"></path><path d="M8 3v4"></path><path d="M16 3v4"></path><path d="M12 3v4"></path></svg> Halal Pharmaceuticals & Health Products Excellence Award</h3>
            <p>Highlighting leadership in Halal pharmaceuticals, nutraceuticals, medical devices, and wellness solutions.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><path d="M12 1v6M12 17v6M5.64 5.64l4.24 4.24M14.12 14.12l4.24 4.24M1 12h6M17 12h6M5.64 18.36l4.24-4.24M14.12 9.88l4.24-4.24"></path></svg> Halal Cosmetics & Personal Care Excellence Award</h3>
            <p>Recognising Halal-certified brands known for innovation, safety, and global competitiveness.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="12" rx="2" ry="2"></rect><line x1="6" y1="20" x2="18" y2="20"></line><line x1="10" y1="4" x2="14" y2="4"></line><path d="M8 8h8M8 12h6"></path></svg> Halal Digital Economy Pioneer Award</h3>
            <p>Celebrating innovators driving digital platforms, e-commerce, certification technologies, and Halal fintech.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12h12"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 12h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg> Halal-Friendly Tourism & Hospitality Excellence Award</h3>
            <p>Honouring organisations delivering world-class Muslim-friendly tourism and hospitality services.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="18" rx="2" ry="2"></rect><line x1="7" y1="3" x2="7" y2="21"></line><line x1="17" y1="3" x2="17" y2="21"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg> Halal SME of the Year Award</h3>
            <p>Acknowledging SMEs achieving outstanding performance, innovation, and international readiness.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path></svg> Lifetime Achievement Award in the Global Halal Economy</h3>
            <p>Recognising individuals with exceptional long-term contributions to Halal industry development.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> Young Halal Entrepreneur Award</h3>
            <p>Celebrating rising leaders under 40 shaping the next wave of Halal economic growth.</p>
        </div>
        
        <div class="category-item">
            <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg> Global Halal Education, Research & Knowledge Leadership Award</h3>
            <p>Honouring institutions or individuals advancing Halal research, standards, academia, or policy innovation.</p>
        </div>
    </div>
    
    <!-- Special Honours Section -->
    <div style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid rgba(212, 175, 55, 0.3);">
        <h2 style="text-align: center; font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem; background: linear-gradient(135deg, #d4af37, #f4e4bc, #d4af37); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;">
            SPECIAL HONOURS
        </h2>
        <p style="text-align: center; font-size: 1.2rem; color: rgba(255, 255, 255, 0.8); margin-bottom: 2rem; max-width: 800px; margin-left: auto; margin-right: auto;">
            Award categories given to exceptional individuals and organizations making long-standing contributions to the Halal industry.
        </p>
        
        <div class="categories-list">
            <div class="category-item" style="background: rgba(212, 175, 55, 0.1); border-color: rgba(212, 175, 55, 0.6);">
                <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path></svg> Halal Industry Leadership Lifetime Achievement Award</h3>
                <p></p>
            </div>
            
            <div class="category-item" style="background: rgba(212, 175, 55, 0.1); border-color: rgba(212, 175, 55, 0.6);">
                <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg> Global Halal Visionary Award</h3>
                <p></p>
            </div>
            
            <div class="category-item" style="background: rgba(212, 175, 55, 0.1); border-color: rgba(212, 175, 55, 0.6);">
                <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z"></path><path d="M9 12l2 2 4-4"></path></svg> Halal Woman Leader of the Year</h3>
                <p></p>
            </div>
            
            <div class="category-item" style="background: rgba(212, 175, 55, 0.1); border-color: rgba(212, 175, 55, 0.6);">
                <h3><svg class="category-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg> Young Halal Innovator Award</h3>
                <p></p>
            </div>
        </div>
        
        <div style="margin-top: 2rem; padding: 1.5rem; background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 12px;">
            <h3 style="font-size: 1.2rem; font-weight: 600; color: #d4af37; margin-bottom: 1rem; text-align: center;">Category Design Principles</h3>
            <p style="text-align: center; color: rgba(255, 255, 255, 0.8); margin-bottom: 1rem;">
                All categories are designed around the following principles:
            </p>
            <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0.75rem;">
                <li style="display: flex; align-items: center; gap: 0.5rem; color: rgba(255, 255, 255, 0.8);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                        <path d="M9 11l3 3L22 4"></path>
                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                    </svg>
                    Halal compliance & integrity
                </li>
                <li style="display: flex; align-items: center; gap: 0.5rem; color: rgba(255, 255, 255, 0.8);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                        <path d="M9 11l3 3L22 4"></path>
                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                    </svg>
                    Sustainable and ethical practices
                </li>
                <li style="display: flex; align-items: center; gap: 0.5rem; color: rgba(255, 255, 255, 0.8);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                        <path d="M9 11l3 3L22 4"></path>
                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                    </svg>
                    Innovation & strategic impact
                </li>
                <li style="display: flex; align-items: center; gap: 0.5rem; color: rgba(255, 255, 255, 0.8);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                        <path d="M9 11l3 3L22 4"></path>
                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                    </svg>
                    Measurable outcomes & market contribution
                </li>
                <li style="display: flex; align-items: center; gap: 0.5rem; color: rgba(255, 255, 255, 0.8);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                        <path d="M9 11l3 3L22 4"></path>
                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                    </svg>
                    Demonstrable leadership within the Halal ecosystem
                </li>
            </ul>
            <p style="text-align: center; color: rgba(212, 175, 55, 0.8); margin-top: 1.5rem; font-size: 0.9rem; font-style: italic;">
                These categories can be expanded or customized to align with sponsor interests, government partnerships, or emerging Halal markets.
            </p>
        </div>
    </div>
</div>
@endsection

