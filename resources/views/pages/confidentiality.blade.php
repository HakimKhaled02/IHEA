@extends('layouts.app')

@section('title', 'Confidentiality & Code of Conduct')

@section('content')
<div class="confidentiality-page">
        <div class="page-header">
            <h1>Confidentiality & Code of Conduct</h1>
            <p class="page-intro">
                The International Halal Awards 2026 operates under strict confidentiality and ethical governance protocols.
            </p>
        </div>

        <!-- Confidentiality Principles Section -->
        <div class="section-container" data-aos="fade-up">
            <div class="section-header">
                <i class="fas fa-lock"></i>
                <h2>CONFIDENTIALITY PRINCIPLES</h2>
            </div>
            
            <div class="principles-grid">
                <div class="principle-card">
                    <div class="principle-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="principle-content">
                        <h3>A. ALL ENTRIES ARE TREATED AS CONFIDENTIAL</h3>
                        <p>Information submitted will be:</p>
                        <ul>
                            <li>Used solely for judging purposes</li>
                            <li>Protected from unauthorized sharing</li>
                            <li>Securely stored</li>
                            <li>No details will be publicly disclosed without written consent</li>
                        </ul>
                    </div>
                </div>

                <div class="principle-card">
                    <div class="principle-icon">
                        <i class="fas fa-signature"></i>
                    </div>
                    <div class="principle-content">
                        <h3>B. JUDGES MUST SIGN CONFIDENTIALITY AGREEMENTS</h3>
                        <p>All jurors are legally bound to:</p>
                        <ul>
                            <li>Maintain confidentiality</li>
                            <li>Refrain from discussing submissions</li>
                            <li>Avoid retaining copies of materials</li>
                        </ul>
                    </div>
                </div>

                <div class="principle-card">
                    <div class="principle-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <div class="principle-content">
                        <h3>C. CONFLICT OF INTEREST POLICY</h3>
                        <p>Judges are required to:</p>
                        <ul>
                            <li>Declare any affiliation with an entrant</li>
                            <li>Decline to evaluate entries where conflict exists</li>
                        </ul>
                    </div>
                </div>

                <div class="principle-card">
                    <div class="principle-icon">
                        <i class="fas fa-copyright"></i>
                    </div>
                    <div class="principle-content">
                        <h3>D. INTELLECTUAL PROPERTY PROTECTION</h3>
                        <p>All proprietary content remains the property of the submitting organization</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Code of Conduct Section -->
        <div class="section-container" data-aos="fade-up" data-aos-delay="200">
            <div class="section-header">
                <i class="fas fa-gavel"></i>
                <h2>CODE OF CONDUCT</h2>
            </div>
            
            <div class="conduct-card">
                <div class="conduct-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="conduct-content">
                    <p>Entrants must uphold:</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Honesty in reporting achievements</li>
                        <li><i class="fas fa-check-circle"></i> Transparency in halal practices</li>
                        <li><i class="fas fa-check-circle"></i> Ethical behavior</li>
                        <li><i class="fas fa-check-circle"></i> Accurate representation of results</li>
                    </ul>
                    
                    <div class="warning-callout">
                        <i class="fas fa-exclamation-triangle"></i>
                        <p><strong>Important:</strong> Any misrepresentation may result in disqualification</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enforcement Notice -->
        <div class="enforcement-notice" data-aos="fade-up" data-aos-delay="300">
            <i class="fas fa-exclamation-triangle"></i>
            <div>
                <h3>Strict Enforcement</h3>
                <p>Violation of confidentiality agreements or code of conduct may result in immediate disqualification and potential legal action.</p>
            </div>
        </div>
    </div>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

.confidentiality-page {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, rgba(26, 95, 63, 0.85), rgba(45, 95, 63, 0.85)), 
                url('/assets/background.jpg') center/cover no-repeat;
    min-height: 100vh;
}

/* Override page-content white background */
.page-content {
    background: transparent !important;
    border: none !important;
    padding: 0 !important;
    max-width: none !important;
    box-shadow: none !important;
}

.page-header {
    text-align: center;
    margin-bottom: 3rem;
}

.page-header h1 {
    font-size: 3rem;
    color: white;
    margin-bottom: 1.5rem;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.page-intro {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.section-container {
    background: rgba(255, 215, 0, 0.15);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    padding: 2.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    border: 1px solid rgba(255, 215, 0, 0.3);
}

.section-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid rgba(26, 95, 63, 0.2);
}

.section-header i {
    font-size: 2rem;
    color: #1a5f3f;
}

.section-header h2 {
    color: white;
    font-size: 1.8rem;
    font-weight: 600;
    margin: 0;
}

.principles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.principle-card {
    background: rgba(255, 215, 0, 0.1);
    border-radius: 15px;
    padding: 2rem;
    border: 1px solid rgba(255, 215, 0, 0.2);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.principle-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, #1a5f3f, #2d5f3f);
}

.principle-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.principle-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #1a5f3f, #2d5f3f);
    border-radius: 50%;
    margin-bottom: 1.5rem;
}

.principle-icon i {
    font-size: 1.5rem;
    color: white;
}

.principle-content h3 {
    color: white;
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.principle-content p {
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 1rem;
}

.principle-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.principle-content li {
    padding: 0.5rem 0;
    padding-left: 1.5rem;
    position: relative;
    color: rgba(255, 255, 255, 0.9);
}

.principle-content li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #1a5f3f;
    font-weight: bold;
}

.conduct-card {
    background: rgba(255, 215, 0, 0.1);
    border-radius: 15px;
    padding: 2rem;
    display: flex;
    align-items: flex-start;
    gap: 2rem;
    border: 1px solid rgba(255, 215, 0, 0.2);
}

.conduct-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #1a5f3f, #2d5f3f);
    border-radius: 50%;
    flex-shrink: 0;
}

.conduct-icon i {
    font-size: 2rem;
    color: white;
}

.conduct-content {
    flex: 1;
}

.conduct-content p {
    color: white;
    font-size: 1.1rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
}

.conduct-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.conduct-content li {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem 0;
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.05rem;
}

.conduct-content li i {
    color: #27ae60;
    font-size: 1.2rem;
}

.enforcement-notice {
    background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(255, 193, 7, 0.2));
    border: 2px solid rgba(255, 215, 0, 0.5);
    border-radius: 15px;
    padding: 2rem;
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-top: 2rem;
}

.enforcement-notice i {
    font-size: 2.5rem;
    color: #FFD700;
}

.enforcement-notice h3 {
    color: white;
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.enforcement-notice p {
    color: rgba(255, 255, 255, 0.9);
    margin: 0;
}

.warning-callout {
    background: linear-gradient(135deg, rgba(255, 193, 7, 0.1), rgba(255, 152, 0, 0.1));
    border: 2px solid rgba(255, 193, 7, 0.3);
    border-radius: 10px;
    padding: 1.25rem;
    margin-top: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.warning-callout i {
    font-size: 1.5rem;
    color: #ffc107;
    flex-shrink: 0;
}

.warning-callout p {
    margin: 0;
    color: #856404;
    font-weight: 500;
}

@media (max-width: 768px) {
    .confidentiality-page {
        padding: 1rem;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
    
    .section-container {
        padding: 1.5rem;
    }
    
    .principles-grid {
        grid-template-columns: 1fr;
    }
    
    .conduct-card {
        flex-direction: column;
        text-align: center;
    }
    
    .enforcement-notice {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<!-- AOS Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
</script>
@endsection

