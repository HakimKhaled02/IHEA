@extends('layouts.app')

@section('title', 'Contact Us')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/mission-page.css') }}">
<style>
    .contact-page {
        width: 100%;
        margin: 0;
        padding: 0;
        background: #000000;
        position: relative;
    }
    
    .contact-content-wrapper {
        width: 100%;
        padding: 4rem 2rem;
        position: relative;
        z-index: 1;
        background: #000000;
    }
    
    .contact-content-wrapper::before {
        display: none;
    }
    
    .contact-content-wrapper > * {
        position: relative;
        z-index: 1;
    }
    
    .contact-content-grid {
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
    }
    
    .contact-info {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .section-heading {
        font-size: 1rem;
        font-weight: 500;
        color: #D4AF37;
        margin: 0 0 1rem 0;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }
    
    .contact-main-title {
        font-size: 2rem;
        font-weight: 700;
        color: #D4AF37;
        margin: 0 0 1.5rem 0;
        line-height: 1.2;
    }
    
    .contact-description {
        font-size: 1rem;
        line-height: 1.8;
        color: #ffffff;
        margin: 0 0 3rem 0;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .contact-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 1.5rem;
        padding: 2.5rem;
        background: rgba(0, 0, 0, 0.6);
        border: 1px solid rgba(212, 175, 55, 0.5);
        border-radius: 16px;
        transition: all 0.3s ease;
        position: relative;
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
        background: rgba(0, 0, 0, 0.8);
        border-color: rgba(212, 175, 55, 0.7);
        transform: translateY(-4px);
        box-shadow: 0 20px 60px rgba(212, 175, 55, 0.3);
    }
    
    .contact-icon {
        font-size: 1.5rem;
        color: #D4AF37;
        min-width: 2rem;
        flex-shrink: 0;
        line-height: 1.2;
        margin-top: 0.25rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    .contact-text {
        flex: 1;
    }
    
    .contact-text h3 {
        font-size: 1.125rem;
        font-weight: 600;
        color: #ffffff;
        margin: 0 0 0.75rem 0;
        line-height: 1.4;
    }
    
    .contact-link {
        color: rgba(212, 175, 55, 0.9);
        text-decoration: none;
        font-size: 0.9375rem;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        line-height: 1.7;
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
        .contact-content-wrapper {
            padding: 3rem 1.5rem;
        }
        
        .contact-details {
            grid-template-columns: 1fr;
            gap: 1.5rem;
            max-width: 100%;
        }
        
        .contact-item {
            padding: 2rem;
        }
        
        .contact-main-title {
            font-size: 1.75rem;
        }
    }
    
    @media (max-width: 480px) {
        .contact-content-wrapper {
            padding: 2rem 1rem;
        }
        
        .contact-details {
            gap: 1.25rem;
        }
        
        .contact-item {
            padding: 1.5rem;
        }
        
        .contact-main-title {
            font-size: 1.5rem;
        }
        
        .contact-text h3 {
            font-size: 1rem;
        }
        
        .contact-link {
            font-size: 0.875rem;
        }
    }
</style>
@endpush

@section('content')
<div class="contact-page">
    <!-- Hero Section -->
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
                    INTERNATIONAL HALAL ECONOMIC AWARD 2026
                </div>
                <h1 class="hero-title scroll-animate fade-in-up delay-1">
                    CONTACT US
                </h1>
                <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                    Get in touch with us for any inquiries about the International Halal Economic Award 2026
                </p>
            </div>
        </div>
    </div>
    
    <!-- Content Section -->
    <div class="contact-content-wrapper">
        <div class="contact-content-grid">
            <div class="contact-info">
                <p class="section-heading scroll-animate fade-in-up">Get in Touch</p>
                <h2 class="contact-main-title scroll-animate fade-in-up delay-1">CONTACT US</h2>
                <p class="contact-description scroll-animate fade-in-up delay-2">
                    We're here to help answer any questions you may have about the awards program.
                </p>
                
                <div class="contact-details">
                    <div class="contact-item scroll-animate fade-in-up delay-3">
                        <i class="fas fa-phone-alt contact-icon"></i>
                        <div class="contact-text">
                            <h3>Phone / WhatsApp</h3>
                            <a href="https://wa.me/601155549299?text=I%20would%20like%20to%20know%20more%20info%20on%20how%20to%20join%20this%20IHEA%202026." class="contact-link whatsapp-link" target="_blank">
                                <i class="fab fa-whatsapp"></i> +60 11-5554 9299
                            </a>
                        </div>
                    </div>
                    
                    <div class="contact-item scroll-animate fade-in-up delay-4">
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
    </div>
</div>
@endsection

@push('scripts')
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
    });
</script>
@endpush

