@extends('layouts.app')

@section('title', 'Judging Framework & Standards')

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
    
    .stage-number {
        background: linear-gradient(135deg, #059669, #047857);
        color: white;
        font-size: 2rem;
        font-weight: 700;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 2rem;
        flex-shrink: 0;
    }
    
    .verification-list {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 1.5rem;
        border-radius: 0.5rem;
        border-left: 4px solid rgba(212, 175, 55, 0.5);
    }
    
    .verification-item {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        color: rgba(255, 255, 255, 0.8);
    }
    
    .verification-item i {
        color: rgba(212, 175, 55, 0.8);
        margin-right: 1rem;
        font-size: 1.2rem;
    }
    
    .verification-item strong {
        color: white;
    }
    
    .sub-list {
        margin-left: 2rem;
        margin-top: 0.5rem;
        margin-bottom: 1rem;
    }
    
    .sub-list li {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 0.5rem;
        list-style-type: '• ';
        padding-left: 0.5rem;
    }
    
    .note {
        font-style: italic;
        color: rgba(212, 175, 55, 0.8);
        background: rgba(212, 175, 55, 0.1);
        padding: 0.75rem;
        border-radius: 0.5rem;
        border-left: 3px solid rgba(212, 175, 55, 0.5);
        margin-top: 1rem;
    }
    
    .judge-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
    }
    
    .judge-item {
        display: flex;
        align-items: center;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0.5rem;
        transition: all 0.3s ease;
    }
    
    .judge-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.3);
    }
    
    .judge-item i {
        color: rgba(212, 175, 55, 0.8);
        font-size: 1.2rem;
        margin-right: 0.75rem;
    }
    
    .judge-item span {
        color: rgba(255, 255, 255, 0.8);
    }
    
    .ensures-list ul {
        list-style: none;
        padding: 0;
    }
    
    .ensures-list li {
        display: flex;
        align-items: center;
        padding: 0.75rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        margin-bottom: 0.75rem;
        border-radius: 0.375rem;
    }
    
    .ensures-list li i {
        color: rgba(212, 175, 55, 0.8);
        margin-right: 1rem;
        font-size: 1.1rem;
    }
    
    .validation-items {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .validation-item {
        display: flex;
        align-items: center;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0.5rem;
    }
    
    .validation-item i {
        color: rgba(212, 175, 55, 0.8);
        font-size: 1.3rem;
        margin-right: 0.75rem;
    }
    
    .validation-item span {
        color: rgba(255, 255, 255, 0.8);
        font-weight: 500;
    }
    
    .confidential-notice {
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, rgba(5, 150, 105, 0.1), rgba(6, 78, 59, 0.1));
        color: white;
        padding: 1.25rem;
        border-radius: 0.5rem;
        border: 1px solid rgba(5, 150, 105, 0.3);
    }
    
    .confidential-notice i {
        color: rgba(212, 175, 55, 0.8);
        font-size: 1.5rem;
        margin-right: 1rem;
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
                <span class="hero-gradient">Judging Framework</span><br>
                <span class="text-white">& Standards</span>
            </h1>
            <p class="hero-subtitle">
                The judging methodology reflects the highest standards of fairness, objectivity, and global benchmarking, adapted to Halal-specific requirements
            </p>
        </div>
    </div>
</div>

<!-- Grand Framework Sections -->
<div class="max-w-4xl mx-auto px-8 py-24">
    <div class="space-y-24">
        
        <!-- Multi-Stage Evaluation Process -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.1s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">01</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">MULTI-STAGE EVALUATION PROCESS</h2>
                    <p class="section-subtitle mb-8">Comprehensive Assessment Framework</p>
                    <div class="content-area">
                        <div class="space-y-6">
                            <!-- Stage 1 -->
                            <div class="flex items-start gap-6">
                                <div class="stage-number">1</div>
                                <div class="flex-1">
                                    <h3 class="text-white text-xl font-semibold mb-2">Initial Screening</h3>
                                    <p class="text-white/80 mb-4">Compliance verification and eligibility assessment</p>
                                    <div class="verification-list">
                                        <div class="verification-item">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Documentation Review</strong>
                                                <ul class="sub-list">
                                                    <li>Halal certification validity</li>
                                                    <li>Business registration</li>
                                                    <li>Financial statements</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="verification-item">
                                            <i class="fas fa-shield-alt"></i>
                                            <strong>Compliance Check</strong>
                                        </div>
                                    </div>
                                    <p class="note mt-4">Only complete submissions proceed to evaluation</p>
                                </div>
                            </div>

                            <!-- Stage 2 -->
                            <div class="flex items-start gap-6">
                                <div class="stage-number">2</div>
                                <div class="flex-1">
                                    <h3 class="text-white text-xl font-semibold mb-2">Detailed Evaluation</h3>
                                    <p class="text-white/80 mb-4">Comprehensive scoring against criteria</p>
                                    <div class="verification-list">
                                        <div class="verification-item">
                                            <i class="fas fa-clipboard-check"></i>
                                            <div>
                                                <strong>Criteria Assessment</strong>
                                                <ul class="sub-list">
                                                    <li>Halal integrity & compliance</li>
                                                    <li>Innovation & transformation</li>
                                                    <li>Market performance & impact</li>
                                                    <li>Sustainability & ESG</li>
                                                    <li>Strategic execution</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="verification-item">
                                            <i class="fas fa-chart-bar"></i>
                                            <strong>Scoring & Ranking</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stage 3 -->
                            <div class="flex items-start gap-6">
                                <div class="stage-number">3</div>
                                <div class="flex-1">
                                    <h3 class="text-white text-xl font-semibold mb-2">Final Review</h3>
                                    <p class="text-white/80 mb-4">Expert panel validation and selection</p>
                                    <div class="verification-list">
                                        <div class="verification-item">
                                            <i class="fas fa-users"></i>
                                            <div>
                                                <strong>Panel Review</strong>
                                                <ul class="sub-list">
                                                    <li>Expert evaluation</li>
                                                    <li>Cross-validation</li>
                                                    <li>Consensus building</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="verification-item">
                                            <i class="fas fa-trophy"></i>
                                            <strong>Winner Selection</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Judging Standards -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.2s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">A</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">JUDGING STANDARDS</h2>
                    <p class="section-subtitle mb-8">International Best Practices</p>
                    <div class="content-area">
                        <div class="space-y-4">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>ISO 9001 Quality Management Standards</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Global Halal Certification Requirements</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>International Award Association Guidelines</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>ESG (Environmental, Social, Governance) Framework</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>UN Sustainable Development Goals Alignment</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Industry-Specific Benchmarks</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Judging Panel Composition -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.3s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">B</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">JUDGING PANEL COMPOSITION</h2>
                    <p class="section-subtitle mb-8">Diverse Expertise & Perspectives</p>
                    <div class="content-area">
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-white font-semibold mb-3">Industry Experts</h4>
                                <div class="judge-grid">
                                    <div class="judge-item">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Halal Industry Leaders</span>
                                    </div>
                                    <div class="judge-item">
                                        <i class="fas fa-microscope"></i>
                                        <span>Technical Specialists</span>
                                    </div>
                                    <div class="judge-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>Business Analysts</span>
                                    </div>
                                    <div class="judge-item">
                                        <i class="fas fa-leaf"></i>
                                        <span>Sustainability Experts</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-3">Academic & Regulatory</h4>
                                <div class="judge-grid">
                                    <div class="judge-item">
                                        <i class="fas fa-graduation-cap"></i>
                                        <span>Academic Scholars</span>
                                    </div>
                                    <div class="judge-item">
                                        <i class="fas fa-balance-scale"></i>
                                        <span>Regulatory Authorities</span>
                                    </div>
                                    <div class="judge-item">
                                        <i class="fas fa-certificate"></i>
                                        <span>Certification Bodies</span>
                                    </div>
                                    <div class="judge-item">
                                        <i class="fas fa-globe"></i>
                                        <span>International Advisors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Evaluation Process -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.4s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">C</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">EVALUATION PROCESS</h2>
                    <p class="section-subtitle mb-8">Transparent & Methodical Assessment</p>
                    <div class="content-area">
                        <div class="space-y-4">
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Blind evaluation process to ensure impartiality</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Multiple reviewers per entry</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Standardized scoring rubric</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Consensus-based final decisions</span>
                            </div>
                            <div class="list-item">
                                <span class="list-bullet">•</span>
                                <span>Audit trail for all evaluations</span>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h4 class="text-white font-semibold mb-4">Validation Measures</h4>
                            <div class="validation-items">
                                <div class="validation-item">
                                    <i class="fas fa-check-double"></i>
                                    <span>Peer Review</span>
                                </div>
                                <div class="validation-item">
                                    <i class="fas fa-sync-alt"></i>
                                    <span>Cross-Check</span>
                                </div>
                                <div class="validation-item">
                                    <i class="fas fa-file-contract"></i>
                                    <span>Documentation</span>
                                </div>
                                <div class="validation-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Confidentiality</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ensuring Fairness -->
        <div class="grand-section p-12 animate-fade-in-up" style="animation-delay: 0.5s;">
            <div class="flex items-start gap-8 mb-8">
                <div class="section-number">D</div>
                <div class="flex-1">
                    <h2 class="section-title serif-heading mb-2">ENSURING FAIRNESS & INTEGRITY</h2>
                    <p class="section-subtitle mb-8">Commitment to Excellence</p>
                    <div class="content-area">
                        <div class="ensures-list">
                            <ul>
                                <li>
                                    <i class="fas fa-ban"></i>
                                    <span>Conflict of interest declarations</span>
                                </li>
                                <li>
                                    <i class="fas fa-eye-slash"></i>
                                    <span>Anonymous submission review</span>
                                </li>
                                <li>
                                    <i class="fas fa-random"></i>
                                    <span>Random assignment of reviewers</span>
                                </li>
                                <li>
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Statistical validation of scores</span>
                                </li>
                                <li>
                                    <i class="fas fa-comments"></i>
                                    <span>Appeal process for disputes</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="confidential-notice mt-8">
                            <i class="fas fa-lock"></i>
                            <div>
                                <strong>Strict Confidentiality</strong>
                                <p class="mt-1">All submissions and evaluations remain confidential until official announcement</p>
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
                Trust in our <span class="text-halal-gold font-semibold">rigorous evaluation process</span> for fair and transparent recognition
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
