@extends('layouts.app')

@section('title', 'Participation Guidelines & Submission')

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
    
    .guidelines-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem;
    }
    
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
            z-index: 2;
        "></div>
        
        <div class="hero-content">
            <div class="hero-badge">
                International Halal Economic Awards 2026
            </div>
            <h1 class="hero-title">
                PARTICIPATION<br>GUIDELINES
            </h1>
            <p class="hero-subtitle">
                Complete guide to participating in the prestigious International Halal Economic Awards 2026
            </p>
        </div>
    </div>
</div>

<!-- Guidelines Section -->
<div class="guidelines-container">
    <!-- SECTION 1: ELIGIBILITY REQUIREMENTS -->
    <h2 style="color: #d4af37; font-size: 2.5rem; margin-bottom: 2rem; font-family: 'Space Grotesk', sans-serif;">Eligibility Requirements</h2>
    
    <h3 style="color: #ffffff; font-size: 1.5rem; margin-bottom: 1rem; font-family: 'Space Grotesk', sans-serif;">Who Can Enter:</h3>
    <div class="eligibility-grid">
        <div class="eligibility-item">
            <h4>Corporations</h4>
        </div>
        <div class="eligibility-item">
            <h4>SMEs</h4>
        </div>
        <div class="eligibility-item">
            <h4>Government Agencies</h4>
        </div>
        <div class="eligibility-item">
            <h4>Cooperatives</h4>
        </div>
        <div class="eligibility-item">
            <h4>Startups and Innovators</h4>
        </div>
        <div class="eligibility-item">
            <h4>NGOs and Community Organizations</h4>
        </div>
        <div class="eligibility-item">
            <h4>International Entities</h4>
        </div>
    </div>
    
    <h3 style="color: #ffffff; font-size: 1.5rem; margin-bottom: 1rem; font-family: 'Space Grotesk', sans-serif;">Eligibility Rules:</h3>
    <ul>
        <li>Entries must demonstrate clear Halal relevance, compliance, or impact.</li>
        <li>Achievements must be active within 2023–2026.</li>
        <li>Evidence of Halal certification is required for categories involving food, cosmetics, pharmaceuticals, or supply chains.</li>
        <li>Joint entries are allowed; organizations may enter multiple categories.</li>
    </ul>
    
    <!-- SECTION 2: HOW TO ENTER -->
    <h2 style="color: #d4af37; font-size: 2.5rem; margin-bottom: 2rem; margin-top: 3rem; font-family: 'Space Grotesk', sans-serif;">How To Enter</h2>
    
    <div class="process-steps">
        <div class="process-step">
            <div class="step-number">1</div>
            <div class="step-content">
                <h3>Select Category</h3>
                <p>Choose the most relevant award category.</p>
            </div>
        </div>
        
        <div class="process-step">
            <div class="step-number">2</div>
            <div class="step-content">
                <h3>Register Online</h3>
                <p>Complete form on the official website.</p>
            </div>
        </div>
        
        <div class="process-step">
            <div class="step-number">3</div>
            <div class="step-content">
                <h3>Prepare Documents</h3>
                <p>Executive summary, achievement narrative, evidence of results, Halal certs.</p>
            </div>
        </div>
        
        <div class="process-step">
            <div class="step-number">4</div>
            <div class="step-content">
                <h3>Upload Submission</h3>
                <p>Submit via the portal.</p>
            </div>
        </div>
        
        <div class="process-step">
            <div class="step-number">5</div>
            <div class="step-content">
                <h3>Payment</h3>
                <p>Settle entry fees.</p>
            </div>
        </div>
        
        <div class="process-step">
            <div class="step-number">6</div>
            <div class="step-content">
                <h3>Confirmation</h3>
                <p>Receive ID and verification requests.</p>
            </div>
        </div>
    </div>
    
    <!-- SECTION 3: SUBMISSION RULES -->
    <h2 style="color: #d4af37; font-size: 2.5rem; margin-bottom: 2rem; margin-top: 3rem; font-family: 'Space Grotesk', sans-serif;">Submission Rules</h2>
    
    <div class="rules-list">
        <div class="rule-item">
            <strong>Originality:</strong> Entries must be original and owned by the submitter.
        </div>
        <div class="rule-item">
            <strong>Accuracy:</strong> Information must accurately reflect real achievements.
        </div>
        <div class="rule-item">
            <strong>Completeness:</strong> Incomplete entries may be disqualified.
        </div>
        <div class="rule-item">
            <strong>Evidence:</strong> Data, case studies, and certification records are required.
        </div>
        <div class="rule-item">
            <strong>Fees:</strong> Non-refundable once submitted.
        </div>
        <div class="rule-item">
            <strong>Verification:</strong> Organizers may request audits or site checks.
        </div>
        <div class="rule-item">
            <strong>Deadlines:</strong> Late entries may be excluded.
        </div>
    </div>
    
    <div class="cta-section">
        <a href="{{ route('awards.create') }}" class="btn btn-primary btn-large">Start Your Submission</a>
    </div>
</div>

<style>
.eligibility-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-top: 1.5rem;
    margin-bottom: 2rem;
}

.eligibility-item {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.eligibility-item:hover {
    border-color: var(--halal-gold);
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);
}

.eligibility-item h4 {
    color: #d4af37;
    font-size: 1.2rem;
    font-weight: 600;
}

.process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
    margin-bottom: 3rem;
}

.process-step {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    transition: all 0.3s ease;
}

.process-step:hover {
    border-color: var(--halal-gold);
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);
}

.step-number {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--halal-gold), rgba(212, 175, 55, 0.7));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    color: #000;
    margin: 0 auto 1rem;
}

.step-content h3 {
    color: #d4af37;
    font-size: 1.3rem;
    margin-bottom: 0.5rem;
}

.step-content p {
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.5;
}

.rules-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.rule-item {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.rule-item:hover {
    border-color: var(--halal-gold);
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);
}

.rule-item strong {
    color: #d4af37;
    font-size: 1.1rem;
}

.cta-section {
    text-align: center;
    margin-top: 3rem;
    padding: 3rem;
    background: rgba(212, 175, 55, 0.05);
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 15px;
}

.btn {
    display: inline-block;
    padding: 1rem 2rem;
    background: linear-gradient(135deg, var(--halal-gold), rgba(212, 175, 55, 0.8));
    color: #000;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    position: relative;
    padding-left: 2rem;
    margin-bottom: 1rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
}

ul li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--halal-gold);
    font-weight: bold;
    font-size: 1.2rem;
}

@media (max-width: 768px) {
    .hero-full {
        min-height: 70vh;
        padding: 2rem 1rem;
    }
    
    .guidelines-container {
        padding: 2rem 1rem;
    }
    
    .process-steps {
        grid-template-columns: 1fr;
    }
    
    .rules-list {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush
    transform: translateX(5px);
}

.eligibility-item h4 {
    color: var(--ihec-teal-light);
    margin: 0;
    font-size: 1.25rem;
}

.process-steps {
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.process-step {
    display: flex;
    align-items: flex-start;
    gap: 2rem;
    margin-bottom: 2rem;
    background: var(--ihec-bg-secondary);
    border: 1px solid rgba(0, 168, 150, 0.2);
    border-radius: 8px;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.process-step:hover {
    border-color: var(--ihec-teal);
    transform: translateX(5px);
}

.step-number {
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
    flex-shrink: 0;
}

.step-content {
    flex: 1;
}

.step-content h3 {
    color: var(--ihec-teal-light);
    margin: 0 0 0.75rem 0;
    font-size: 1.25rem;
}

.step-content p {
    margin: 0;
    color: var(--ihec-text-secondary);
}

.rules-list {
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.rule-item {
    background: var(--ihec-bg-secondary);
    border: 1px solid rgba(0, 168, 150, 0.2);
    border-radius: 8px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    transition: all 0.3s ease;
}

.rule-item:hover {
    border-color: var(--ihec-teal);
    transform: translateX(5px);
}

.rule-item strong {
    color: var(--ihec-teal-light);
    display: block;
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
}

.rule-item {
    color: var(--ihec-text-secondary);
    line-height: 1.8;
}

@media (max-width: 768px) {
    .eligibility-grid {
        grid-template-columns: 1fr;
    }
    
    .process-step {
        flex-direction: column;
        gap: 1rem;
    }
    
    .step-number {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
}
</style>
@endsection
