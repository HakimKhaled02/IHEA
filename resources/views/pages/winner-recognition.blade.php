@extends('layouts.app')

@section('title', 'Winner Recognition & Usage Rights')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap');
    
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes gradient-shift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    @keyframes subtle-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(212, 175, 55, 0.1); }
        50% { box-shadow: 0 0 30px rgba(212, 175, 55, 0.2); }
    }
    
    body {
        font-family: 'Inter', sans-serif;
    }
    
    .serif-heading {
        font-family: 'Playfair Display', serif;
    }
    
    .grand-section {
        background: linear-gradient(135deg, 
            rgba(5, 150, 105, 0.03) 0%, 
            rgba(6, 78, 59, 0.05) 50%, 
            rgba(5, 150, 105, 0.03) 100%);
        border-left: 4px solid rgba(212, 175, 55, 0.3);
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        position: relative;
    }
    
    .grand-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, 
            transparent 0%, 
            rgba(212, 175, 55, 0.3) 50%, 
            transparent 100%);
    }
    
    .grand-section:hover {
        transform: translateY(-8px);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.1),
            0 0 20px rgba(212, 175, 55, 0.15);
        border-left-color: rgba(212, 175, 55, 0.6);
    }
    
    .section-number {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        font-weight: 900;
        background: linear-gradient(135deg, 
            #d4af37 0%, 
            #f4e4bc 50%, 
            #d4af37 100%);
        background-size: 200% 200%;
        animation: gradient-shift 4s ease infinite;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
        opacity: 0.9;
    }
    
    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.875rem;
        font-weight: 700;
        color: white;
        line-height: 1.2;
        letter-spacing: -0.02em;
    }
    
    .section-subtitle {
        color: rgba(212, 175, 55, 0.8);
        font-weight: 500;
        font-size: 0.875rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }
    
    .content-area {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0.75rem;
        padding: 2rem;
        position: relative;
    }
    
    .content-area::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, 
            rgba(212, 175, 55, 0.02) 0%, 
            transparent 50%, 
            rgba(5, 150, 105, 0.02) 100%);
        border-radius: inherit;
        pointer-events: none;
    }
    
    .list-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
    }
    
    .list-bullet {
        color: rgba(212, 175, 55, 0.8);
        font-weight: 600;
        flex-shrink: 0;
        margin-top: 0.25rem;
    }
    
    .hero-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(3rem, 8vw, 6rem);
        font-weight: 900;
        line-height: 0.9;
        letter-spacing: -0.04em;
    }
    
    .hero-gradient {
        background: linear-gradient(135deg, 
            #d4af37 0%, 
            #f4e4bc 25%, 
            #d4af37 50%, 
            #b8941f 75%, 
            #d4af37 100%);
        background-size: 200% 200%;
        animation: gradient-shift 6s ease infinite;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: drop-shadow(0 2px 4px rgba(212, 175, 55, 0.3));
    }
    
    .hero-subtitle {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.7);
        font-weight: 300;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }
    
    .hero-badge {
        background: linear-gradient(135deg, 
            rgba(212, 175, 55, 0.1) 0%, 
            rgba(212, 175, 55, 0.05) 100%);
        border: 1px solid rgba(212, 175, 55, 0.3);
        padding: 0.75rem 2rem;
        border-radius: 2rem;
        font-size: 0.875rem;
        font-weight: 500;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: rgba(212, 175, 55, 0.9);
        animation: subtle-glow 4s ease-in-out infinite;
    }
    
    .highlight-box {
        background: linear-gradient(135deg, 
            rgba(212, 175, 55, 0.08) 0%, 
            rgba(5, 150, 105, 0.08) 100%);
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 0.5rem;
        padding: 1.5rem;
        text-align: center;
        font-weight: 500;
        color: white;
        position: relative;
        overflow: hidden;
    }
    
    .highlight-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent 0%, 
            rgba(212, 175, 55, 0.1) 50%, 
            transparent 100%);
        animation: gradient-shift 3s ease infinite;
    }
    
    .footer-grand {
        background: linear-gradient(135deg, 
            rgba(212, 175, 55, 0.05) 0%, 
            rgba(5, 150, 105, 0.05) 100%);
        border: 1px solid rgba(212, 175, 55, 0.2);
        padding: 2rem 3rem;
        border-radius: 2rem;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .footer-grand:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.4);
    }
    
    .vertical-divider {
        width: 1px;
        background: linear-gradient(180deg, 
            transparent 0%, 
            rgba(212, 175, 55, 0.3) 50%, 
            transparent 100%);
        margin: 0 2rem;
    }
</style>
@endpush

@section('content')
<!-- Grand Hero Section -->
<div class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-halal-dark to-gray-900 py-32">
    <div class="max-w-4xl mx-auto px-8 text-center">
        <div class="animate-fade-in-up">
            <div class="hero-badge inline-block mb-12">
                International Halal Awards 2026
            </div>
            <h1 class="hero-title serif-heading mb-8">
                <span class="hero-gradient">Winner Recognition</span><br>
                <span class="text-white">& Usage Rights</span>
            </h1>
            <p class="hero-subtitle">
                Winners of the International Halal Awards 2026 will receive exceptional global exposure and branding privileges
            </p>
        </div>
    </div>
</div>

<!-- Grand Recognition Sections -->
<div class="max-w-4xl mx-auto px-8 py-24">
    <div class="space-y-24">
        
        <!-- Section A -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.1s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">A</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">AWARDS TROPHY & CERTIFICATE</h2>
                    <p class="section-subtitle mb-8">Prestigious Recognition of Excellence</p>
                    <div class="content-area">
                        <p class="text-white/80 mb-6 font-medium">Each recipient will be awarded:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>A premium, specially designed trophy</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Official certification of achievement</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section B -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.2s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">B</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">DIGITAL & MEDIA RECOGNITION</h2>
                    <p class="section-subtitle mb-8">Global Media Exposure</p>
                    <div class="content-area">
                        <p class="text-white/80 mb-6 font-medium">Winners will be featured across:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>WIED & IHEC official website</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Halal Economy Magazine</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Social media announcements</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Press releases</span>
                            </div>
                            <div class="list-item md:col-span-2">
                                <span class="list-bullet">•</span>
                                <span>Partner media platforms</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section C -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.3s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">C</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">RIGHTS TO USE THE OFFICIAL WINNER SEAL</h2>
                    <p class="section-subtitle mb-8">Exclusive Branding Privileges</p>
                    <div class="content-area">
                        <p class="text-white/80 mb-6 font-medium">Award recipients may use the International Halal Awards Winner Seal on:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Packaging</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Websites</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Advertising</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Marketing campaigns</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Investor decks</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Trade materials</span>
                            </div>
                        </div>
                        <div class="highlight-box">
                            "WINNER OF THE INTERNATIONAL HALAL AWARDS 2026 – [CATEGORY]"
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section D -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.4s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">D</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">FEATURED CASE LISTING</h2>
                    <p class="section-subtitle mb-8">Global Publication Distribution</p>
                    <div class="content-area">
                        <p class="text-white/80 mb-6 font-medium">Top winners will be showcased in the International Halal Awards Casebook, a global publication distributed to:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Ministries & Government Agencies</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>International Buyers</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Halal Certification Bodies</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Investors</span>
                            </div>
                            <div class="list-item md:col-span-2">
                                <span class="list-bullet">•</span>
                                <span>Industry Councils</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section E -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.5s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">E</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">LONG-TERM RECOGNITION</h2>
                    <p class="section-subtitle mb-8">Permanent Hall of Fame</p>
                    <div class="content-area">
                        <p class="text-white/80 mb-6 font-medium">Winners will remain listed permanently in the:</p>
                        <div class="space-y-4">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>International Halal Awards Winners Archive</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Digital Hall of Fame</span>
                            </div>
                        </div>
                        <div class="mt-8 highlight-box">
                            This ensures sustained visibility well beyond the awards event
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Grand Footer -->
    <div class="mt-32 text-center">
        <div class="footer-grand inline-block">
            <p class="text-white font-medium text-lg">
                Join the elite winners of <span class="text-halal-gold font-semibold">International Halal Awards 2026</span>
            </p>
        </div>
    </div>
</div>

<script>
    // Add staggered animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-fade-in-up').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
</script>
@endsection

