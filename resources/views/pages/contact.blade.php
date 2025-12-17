@extends('layouts.app')

@section('title', 'Contact Us')

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
        z-index: 2;
    }
    
    .hero-content {
        text-align: center;
        max-width: 1000px;
        position: relative;
        z-index: 3;
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
    
    .contact-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 4rem 2rem;
    }
    
    .contact-info {
        text-align: center;
        margin-bottom: 4rem;
    }
    
    .contact-info h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(2rem, 4vw, 2.5rem);
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 1rem;
    }
    
    .contact-info > p {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.8);
        max-width: 600px;
        margin: 0 auto;
    }
    
    .contact-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        padding: 2.5rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .contact-item::before {
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
    
    .contact-item:hover {
        background: rgba(255, 255, 255, 0.04);
        border-color: rgba(212, 175, 55, 0.4);
        transform: translateY(-4px);
        box-shadow: 0 20px 60px rgba(212, 175, 55, 0.2);
    }
    
    .contact-icon {
        font-size: 2.5rem;
        color: rgba(212, 175, 55, 0.9);
        width: 60px;
        text-align: center;
        flex-shrink: 0;
    }
    
    .contact-text h3 {
        margin: 0 0 0.75rem 0;
        font-size: 1.3rem;
        color: #ffffff;
        font-weight: 600;
    }
    
    .contact-link {
        color: rgba(212, 175, 55, 0.9);
        text-decoration: none;
        font-size: 1.1rem;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .contact-link:hover {
        color: #f4e4bc;
        transform: scale(1.05);
    }
    
    .whatsapp-link {
        background: rgba(37, 211, 102, 0.1);
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        border: 1px solid rgba(37, 211, 102, 0.3);
    }
    
    .whatsapp-link:hover {
        background: rgba(37, 211, 102, 0.2);
        border-color: rgba(37, 211, 102, 0.5);
    }
    
    @media (max-width: 768px) {
        .contact-details {
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
        
        .contact-item {
            padding: 2rem;
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
            <div class="hero-badge">
                International Halal Economic Awards 2026
            </div>
            <h1 class="hero-title">
                Contact Us
            </h1>
            <p class="hero-subtitle">
                Get in touch with us for any inquiries about the International Halal Economic Award 2026
            </p>
        </div>
    </div>
</div>

<!-- Contact Content -->
<div class="contact-container">
    <div class="contact-info">
        <h2>Get in Touch</h2>
        <p>We're here to help answer any questions you may have about the awards program.</p>
        
        <div class="contact-details">
            <div class="contact-item">
                <i class="fas fa-phone-alt contact-icon"></i>
                <div class="contact-text">
                    <h3>Phone / WhatsApp</h3>
                    <a href="https://wa.me/601155549299?text=I%20would%20like%20to%20know%20more%20info%20on%20how%20to%20join%20this%20IHEA%202026." class="contact-link whatsapp-link" target="_blank">
                        <i class="fab fa-whatsapp"></i> +60 11-5554 9299
                    </a>
                </div>
            </div>
            
            <div class="contact-item">
                <i class="fas fa-envelope contact-icon"></i>
                <div class="contact-text">
                    <h3>Email</h3>
                    <a href="mailto:ihec@islamic-economy.org" class="contact-link">
                        ihec@islamic-economy.org
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

