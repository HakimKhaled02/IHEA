@extends('layouts.app')

@section('title', 'Confidentiality & Code of Conduct')

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
    
    .principle-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }
    
    .principle-item {
        display: flex;
        align-items: center;
        padding: 1.25rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0.5rem;
        transition: all 0.3s ease;
    }
    
    .principle-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.3);
        transform: translateY(-2px);
    }
    
    .principle-item i {
        color: rgba(212, 175, 55, 0.8);
        font-size: 1.5rem;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    .principle-item span {
        color: rgba(255, 255, 255, 0.8);
        font-weight: 500;
    }
    
    .conduct-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
    }
    
    .conduct-item {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0.5rem;
        padding: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .conduct-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.3);
    }
    
    .conduct-item h4 {
        color: white;
        font-weight: 600;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .conduct-item h4 i {
        color: rgba(212, 175, 55, 0.8);
        font-size: 1.2rem;
    }
    
    .conduct-item p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin: 0;
    }
    
    .enforcement-notice {
        background: linear-gradient(135deg, rgba(5, 150, 105, 0.1), rgba(6, 78, 59, 0.1));
        border: 1px solid rgba(5, 150, 105, 0.3);
        border-radius: 0.75rem;
        padding: 2rem;
        text-align: center;
        color: white;
    }
    
    .enforcement-notice i {
        font-size: 3rem;
        color: rgba(212, 175, 55, 0.8);
        margin-bottom: 1rem;
    }
    
    .enforcement-notice h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
    }
    
    .enforcement-notice p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
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
                <span class="hero-gradient">Confidentiality</span><br>
                <span class="text-white">& Code of Conduct</span>
            </h1>
            <p class="hero-subtitle">
                The International Halal Awards 2026 operates under strict confidentiality and ethical governance protocols
            </p>
        </div>
    </div>
</div>

<!-- Grand Confidentiality Sections -->
<div class="max-w-4xl mx-auto px-8 py-24">
    <div class="space-y-24">
        
        <!-- Confidentiality Principles -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.1s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">A</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">CONFIDENTIALITY PRINCIPLES</h2>
                    <p class="section-subtitle mb-8">Protecting Information Integrity</p>
                    <div class="content-area">
                        <p class="text-white/80 mb-6 font-medium">All participants, judges, and organizers must adhere to:</p>
                        <div class="principle-grid">
                            <div class="principle-item">
                                <i class="fas fa-lock"></i>
                                <span>Non-disclosure of submission details</span>
                            </div>
                            <div class="principle-item">
                                <i class="fas fa-user-secret"></i>
                                <span>Protection of sensitive business information</span>
                            </div>
                            <div class="principle-item">
                                <i class="fas fa-eye-slash"></i>
                                <span>Anonymous evaluation process</span>
                            </div>
                            <div class="principle-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Secure data handling protocols</span>
                            </div>
                            <div class="principle-item">
                                <i class="fas fa-file-contract"></i>
                                <span>Legal confidentiality agreements</span>
                            </div>
                            <div class="principle-item">
                                <i class="fas fa-database"></i>
                                <span>Encrypted storage systems</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Code of Conduct -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.2s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">B</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">CODE OF CONDUCT</h2>
                    <p class="section-subtitle mb-8">Professional Standards & Ethics</p>
                    <div class="content-area">
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-white font-semibold mb-3">For Participants</h4>
                                <div class="conduct-grid">
                                    <div class="conduct-item">
                                        <h4><i class="fas fa-certificate"></i>Authenticity</h4>
                                        <p>Submit only accurate and verifiable information</p>
                                    </div>
                                    <div class="conduct-item">
                                        <h4><i class="fas fa-handshake"></i>Professionalism</h4>
                                        <p>Maintain respectful communication throughout</p>
                                    </div>
                                    <div class="conduct-item">
                                        <h4><i class="fas fa-balance-scale"></i>Fair Play</h4>
                                        <p>Accept decisions with grace and dignity</p>
                                    </div>
                                </div>
                            </div>
                            

                            <div>
                                <h4 class="text-white font-semibold mb-3">For Judges</h4>
                                <div class="conduct-grid">
                                    <div class="conduct-item">
                                        <h4><i class="fas fa-ban"></i>Impartiality</h4>
                                        <p>Evaluate based solely on merit and criteria</p>
                                    </div>
                                    <div class="conduct-item">
                                        <h4><i class="fas fa-eye"></i>Objectivity</h4>
                                        <p>Remove personal bias from evaluation</p>
                                    </div>
                                    <div class="conduct-item">
                                        <h4><i class="fas fa-comments"></i>Confidentiality</h4>
                                        <p>Never discuss evaluations with others</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enforcement -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.3s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">C</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">ENFORCEMENT & COMPLIANCE</h2>
                    <p class="section-subtitle mb-8">Ensuring Standards Are Met</p>
                    <div class="content-area">
                        <div class="space-y-4">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Regular audits of confidentiality protocols</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Independent compliance monitoring</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Clear reporting mechanisms for violations</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Swift investigation of breaches</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Consistent application of penalties</span>
                            </div>
                        </div>
                        
                        <div class="enforcement-notice mt-8">
                            <i class="fas fa-exclamation-triangle"></i>
                            <h4>Strict Enforcement</h4>
                            <p>Violation of confidentiality agreements or code of conduct may result in immediate disqualification and potential legal action</p>
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
                Trust in our <span class="text-halal-gold font-semibold">commitment to confidentiality</span> and ethical excellence
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
