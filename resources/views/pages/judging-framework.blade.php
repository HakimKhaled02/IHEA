@extends('layouts.app')

@section('title', 'Judging Framework & Standards')

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
        background: radial-gradient(ellipse at center, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
    }
    
    .hero-content {
        text-align: center;
        max-width: 1000px;
        position: relative;
        z-index: 2;
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
    
    .framework-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem;
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        position: relative;
    }
    
    .framework-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 3rem;
        position: relative;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
    }
    
    .framework-card:hover {
        transform: translateY(-12px);
        border-color: rgba(212, 175, 55, 0.4);
        box-shadow: 0 25px 80px rgba(212, 175, 55, 0.3);
    }
    
    .card-header {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .card-number {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1));
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Space Grotesk', sans-serif;
        font-size: 1.5rem;
        font-weight: 900;
        color: var(--halal-gold);
        flex-shrink: 0;
    }
    
    .card-title-group {
        flex: 1;
    }
    
    .card-title {
        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 800;
        color: #ffffff;
        line-height: 1.2;
        margin-bottom: 0.5rem;
    }
    
    .card-subtitle {
        color: var(--halal-gold);
        font-weight: 500;
        font-size: 0.875rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }
    
    .stage-container {
        display: grid;
        gap: 2rem;
    }
    
    .stage-item {
        display: flex;
        gap: 2rem;
        padding: 2rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .stage-item:hover {
        background: rgba(255, 255, 255, 0.04);
        transform: translateX(8px);
    }
    
    .stage-number {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--halal-green), #047857);
        color: white;
        font-family: 'Space Grotesk', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        flex-shrink: 0;
    }
    
    .stage-content {
        flex: 1;
    }
    
    .stage-title {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 1.25rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 0.5rem;
    }
    
    .stage-description {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 1.5rem;
    }
    
    .verification-list {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 1.5rem;
        border-radius: 12px;
        border-left: 4px solid rgba(212, 175, 55, 0.5);
    }
    
    .verification-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1rem;
        color: rgba(255, 255, 255, 0.8);
    }
    
    .verification-item:last-child {
        margin-bottom: 0;
    }
    
    .verification-item i {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-top: 0.25rem;
        flex-shrink: 0;
    }
    
    .verification-item strong {
        color: white;
        font-weight: 600;
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
        color: var(--halal-gold);
        background: rgba(212, 175, 55, 0.1);
        padding: 0.75rem;
        border-radius: 8px;
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
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .judge-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.3);
        transform: translateX(8px);
    }
    
    .judge-item i {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-right: 0.75rem;
        flex-shrink: 0;
    }
    
    .judge-item span {
        color: rgba(255, 255, 255, 0.9);
    }
    
    .framework-list {
        list-style: none;
        margin: 0;
    }
    
    .framework-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .framework-item:hover {
        background: rgba(255, 255, 255, 0.04);
        transform: translateX(8px);
    }
    
    .framework-icon {
        color: var(--halal-gold);
        font-size: 1.2rem;
        margin-top: 0.25rem;
        flex-shrink: 0;
    }
    
    .framework-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.9);
    }
    
    .validation-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-top: 2rem;
    }
    
    .validation-item {
        display: flex;
        align-items: center;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .validation-item:hover {
        background: rgba(212, 175, 55, 0.1);
        border-color: rgba(212, 175, 55, 0.3);
    }
    
    .validation-item i {
        color: var(--halal-gold);
        font-size: 1.3rem;
        margin-right: 0.75rem;
        flex-shrink: 0;
    }
    
    .validation-item span {
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
    }
    
    .confidential-notice {
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, rgba(5, 150, 105, 0.1), rgba(6, 78, 59, 0.1));
        color: white;
        padding: 1.5rem;
        border-radius: 12px;
        border: 1px solid rgba(5, 150, 105, 0.3);
        margin-top: 2rem;
    }
    
    .confidential-notice i {
        color: var(--halal-gold);
        font-size: 1.5rem;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    /* Scroll Animations */
    .scroll-animate {
        opacity: 0;
        transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .scroll-animate.fade-in-up {
        transform: translateY(60px);
    }
    
    .scroll-animate.is-animated {
        opacity: 1;
        transform: translateY(0);
    }
    
    .scroll-animate.delay-1 { transition-delay: 0.1s; }
    .scroll-animate.delay-2 { transition-delay: 0.2s; }
    .scroll-animate.delay-3 { transition-delay: 0.3s; }
    .scroll-animate.delay-4 { transition-delay: 0.4s; }
    .scroll-animate.delay-5 { transition-delay: 0.5s; }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .framework-container {
            padding: 2rem 1rem;
        }
        
        .framework-card {
            padding: 2rem;
        }
        
        .hero-full {
            min-height: 70vh;
            padding: 2rem 1rem;
        }
        
        .stage-item {
            flex-direction: column;
            text-align: center;
        }
        
        .judge-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
<!-- Full Width Hero Section -->
<div class="full-width-section">
    <div class="hero-full">
        <div class="hero-content">
            <div class="hero-badge scroll-animate fade-in-up">
                International Halal Awards 2026
            </div>
            <h1 class="hero-title scroll-animate fade-in-up delay-1">
                JUDGING FRAMEWORK<br>& STANDARDS
            </h1>
            <p class="hero-subtitle scroll-animate fade-in-up delay-2">
                The judging methodology reflects the highest standards of fairness, objectivity, and global benchmarking, adapted to Halal-specific requirements
            </p>
        </div>
    </div>
</div>

<!-- Framework Section -->
<div class="framework-container">
    
    <!-- Multi-Stage Evaluation Process -->
    <div class="framework-card scroll-animate fade-in-up delay-1">
        <div class="card-header">
            <div class="card-number">01</div>
            <div class="card-title-group">
                <h2 class="card-title">MULTI-STAGE EVALUATION PROCESS</h2>
                <p class="card-subtitle">Comprehensive Assessment Framework</p>
            </div>
        </div>
        <div class="stage-container">
            <!-- Stage 1 -->
            <div class="stage-item">
                <div class="stage-number">1</div>
                <div class="stage-content">
                    <h3 class="stage-title">Initial Screening</h3>
                    <p class="stage-description">Compliance verification and eligibility assessment</p>
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
                    <p class="note">Only complete submissions proceed to evaluation</p>
                </div>
            </div>

            <!-- Stage 2 -->
            <div class="stage-item">
                <div class="stage-number">2</div>
                <div class="stage-content">
                    <h3 class="stage-title">Detailed Evaluation</h3>
                    <p class="stage-description">Comprehensive scoring against criteria</p>
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
            <div class="stage-item">
                <div class="stage-number">3</div>
                <div class="stage-content">
                    <h3 class="stage-title">Final Review</h3>
                    <p class="stage-description">Expert panel validation and selection</p>
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

    <!-- Judging Standards -->
    <div class="framework-card scroll-animate fade-in-up delay-2">
        <div class="card-header">
            <div class="card-number">A</div>
            <div class="card-title-group">
                <h2 class="card-title">JUDGING STANDARDS</h2>
                <p class="card-subtitle">International Best Practices</p>
            </div>
        </div>
        <ul class="framework-list">
            <li class="framework-item">
                <i class="fas fa-certificate framework-icon"></i>
                <span class="framework-text">ISO 9001 Quality Management Standards</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-globe framework-icon"></i>
                <span class="framework-text">Global Halal Certification Requirements</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-award framework-icon"></i>
                <span class="framework-text">International Award Association Guidelines</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-leaf framework-icon"></i>
                <span class="framework-text">ESG (Environmental, Social, Governance) Framework</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-bullseye framework-icon"></i>
                <span class="framework-text">UN Sustainable Development Goals Alignment</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-chart-line framework-icon"></i>
                <span class="framework-text">Industry-Specific Benchmarks</span>
            </li>
        </ul>
    </div>

    <!-- Judging Panel Composition -->
    <div class="framework-card scroll-animate fade-in-up delay-3">
        <div class="card-header">
            <div class="card-number">B</div>
            <div class="card-title-group">
                <h2 class="card-title">JUDGING PANEL COMPOSITION</h2>
                <p class="card-subtitle">Diverse Expertise & Perspectives</p>
            </div>
        </div>
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

    <!-- Evaluation Process -->
    <div class="framework-card scroll-animate fade-in-up delay-4">
        <div class="card-header">
            <div class="card-number">C</div>
            <div class="card-title-group">
                <h2 class="card-title">EVALUATION PROCESS</h2>
                <p class="card-subtitle">Transparent & Methodical Assessment</p>
            </div>
        </div>
        <ul class="framework-list">
            <li class="framework-item">
                <i class="fas fa-eye-slash framework-icon"></i>
                <span class="framework-text">Blind evaluation process to ensure impartiality</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-users framework-icon"></i>
                <span class="framework-text">Multiple reviewers per entry</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-clipboard-list framework-icon"></i>
                <span class="framework-text">Standardized scoring rubric</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-handshake framework-icon"></i>
                <span class="framework-text">Consensus-based final decisions</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-file-alt framework-icon"></i>
                <span class="framework-text">Audit trail for all evaluations</span>
            </li>
        </ul>
        
        <div class="mt-8">
            <h4 class="text-white font-semibold mb-4">Validation Measures</h4>
            <div class="validation-grid">
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

    <!-- Ensuring Fairness -->
    <div class="framework-card scroll-animate fade-in-up delay-5">
        <div class="card-header">
            <div class="card-number">D</div>
            <div class="card-title-group">
                <h2 class="card-title">ENSURING FAIRNESS & INTEGRITY</h2>
                <p class="card-subtitle">Commitment to Excellence</p>
            </div>
        </div>
        <ul class="framework-list">
            <li class="framework-item">
                <i class="fas fa-ban framework-icon"></i>
                <span class="framework-text">Conflict of interest declarations</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-user-secret framework-icon"></i>
                <span class="framework-text">Anonymous submission review</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-random framework-icon"></i>
                <span class="framework-text">Random assignment of reviewers</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-chart-pie framework-icon"></i>
                <span class="framework-text">Statistical validation of scores</span>
            </li>
            <li class="framework-item">
                <i class="fas fa-comments framework-icon"></i>
                <span class="framework-text">Appeal process for disputes</span>
            </li>
        </ul>
        
        <div class="confidential-notice">
            <i class="fas fa-lock"></i>
            <div>
                <strong>Strict Confidentiality</strong>
                <p class="mt-1">All submissions and evaluations remain confidential until official announcement</p>
            </div>
        </div>
    </div>

</div>

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

        // Add parallax effect to hero section
        const heroContent = document.querySelector('.hero-content');
        if (heroContent) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallax = scrolled * 0.5;
                heroContent.style.transform = `translateY(${parallax}px)`;
            });
        }
    });
</script>
@endsection
