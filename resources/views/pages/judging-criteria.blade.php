@extends('layouts.app')

@section('title', 'Judging Criteria')

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
    
    .progress-container {
        display: flex;
        height: 40px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        background: rgba(255, 255, 255, 0.05);
    }
    
    .progress-segment {
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 0.9rem;
        transition: transform 0.3s ease;
        position: relative;
    }
    
    .progress-segment:hover {
        transform: scaleY(1.1);
        z-index: 10;
    }
    
    .criteria-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }
    
    .criteria-item {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0.75rem;
        padding: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .criteria-item:hover {
        transform: translateY(-4px);
        border-color: rgba(212, 175, 55, 0.3);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    
    .criteria-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }
    
    .criteria-icon i {
        font-size: 1.5rem;
        color: #d4af37;
    }
    
    .criteria-name {
        color: white;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    .criteria-weight {
        color: rgba(212, 175, 55, 0.8);
        font-size: 0.9rem;
        font-weight: 500;
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
    
    .criteria-list li {
        font-size: 0.95rem;
    }
}

/* AOS Animation Overrides */
[data-aos] {
    pointer-events: none;
}

[data-aos].aos-animate {
    pointer-events: auto;
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
                <span class="hero-gradient">Judging Criteria</span><br>
                <span class="text-white">& Framework</span>
            </h1>
            <p class="hero-subtitle">
                The Awards evaluate performance using a comprehensive multi-dimensional scoring system tailored to Halal ethics, industry excellence, and global impact
            </p>
        </div>
    </div>
</div>

<!-- Grand Criteria Sections -->
<div class="max-w-4xl mx-auto px-8 py-24">
    <div class="space-y-24">
        
        <!-- Halal Integrity & Compliance -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.1s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">01</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">HALAL INTEGRITY & COMPLIANCE</h2>
                    <p class="section-subtitle mb-2">WEIGHT: 25%</p>
                    <div class="content-area">
                        <div class="space-y-4">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Alignment with recognized Halal standards</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Transparency in certification and supply chain</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Ethical and Shariah-compliant practices</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Traceability & risk management</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Innovation & Transformation -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.2s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">02</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">INNOVATION & TRANSFORMATION</h2>
                    <p class="section-subtitle mb-2">WEIGHT: 20%</p>
                    <div class="content-area">
                        <div class="space-y-4">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Introduction of new technologies, processes, or business models</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Creativity in solving industry challenges</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Enhancements to user or stakeholder experience</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Pioneering approaches in Halal markets</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Market Performance & Impact -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.3s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">03</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">MARKET PERFORMANCE & IMPACT</h2>
                    <p class="section-subtitle mb-2">WEIGHT: 20%</p>
                    <div class="content-area">
                        <div class="space-y-4">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Measurable business outcomes</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Revenue or export growth</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Market expansion or penetration</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Contribution to industry competitiveness</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sustainability & ESG Contribution -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.4s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">04</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">SUSTAINABILITY & ESG CONTRIBUTION</h2>
                    <p class="section-subtitle mb-2">WEIGHT: 15%</p>
                    <div class="content-area">
                        <div class="space-y-4">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Environmental stewardship</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Social impact and community development</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Responsible governance practices</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Long-term positive outcomes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Strategic Execution & Effectiveness -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.5s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">05</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">STRATEGIC EXECUTION & EFFECTIVENESS</h2>
                    <p class="section-subtitle mb-2">WEIGHT: 20%</p>
                    <div class="content-area">
                        <div class="space-y-4">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Clarity of objectives</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Strength of strategy</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Quality of implementation</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Evidence of success against goals</span>
                            </div>
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
                Our <span class="text-halal-gold font-semibold">structured judging rubric</span> ensures fair and comprehensive evaluation
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

