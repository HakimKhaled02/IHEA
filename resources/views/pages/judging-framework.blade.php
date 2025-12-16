@extends('layouts.app')

@section('title', 'Judging Framework & Standards')

@section('content')
<div class="judging-framework">
        <div class="framework-header">
            <h1>Judging Framework & Standards</h1>
            <p class="framework-intro">
                The judging methodology for the International Halal Awards 2026 is designed to reflect the highest standards of fairness, objectivity, and global benchmarking. Our framework follows international award best practices, adapted to Halal-specific requirements.
            </p>
        </div>

        <div class="multi-stage-process">
            <h2 class="section-title">MULTI-STAGE EVALUATION PROCESS</h2>
            
            <div class="stage-card">
                <div class="stage-number">STAGE 1</div>
                <div class="stage-content">
                    <h3>TECHNICAL VERIFICATION</h3>
                    <p>All submissions undergo initial screening to verify:</p>
                    <div class="verification-list">
                        <div class="verification-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>ELIGIBILITY</strong></span>
                        </div>
                        <ul class="sub-list">
                            <li>Documentation completeness</li>
                            <li>Valid Halal certification (where applicable)</li>
                            <li>Authenticity & compliance</li>
                        </ul>
                        <p class="note">Only qualified entries proceed to Stage 2.</p>
                    </div>
                </div>
            </div>

            <div class="stage-card">
                <div class="stage-number">STAGE 2</div>
                <div class="stage-content">
                    <h3>EXPERT PANEL ASSESSMENT</h3>
                    <p>Panels of independent judges evaluate submissions based on structured scoring criteria</p>
                    
                    <div class="judges-types">
                        <h4>JUDGES CONSIST OF:</h4>
                        <div class="judge-grid">
                            <div class="judge-item">
                                <i class="fas fa-certificate"></i>
                                <span>Halal certification experts</span>
                            </div>
                            <div class="judge-item">
                                <i class="fas fa-industry"></i>
                                <span>Industry specialists</span>
                            </div>
                            <div class="judge-item">
                                <i class="fas fa-graduation-cap"></i>
                                <span>Academics & researchers</span>
                            </div>
                            <div class="judge-item">
                                <i class="fas fa-landmark"></i>
                                <span>Government representatives</span>
                            </div>
                            <div class="judge-item">
                                <i class="fas fa-globe"></i>
                                <span>International Halal leaders</span>
                            </div>
                            <div class="judge-item">
                                <i class="fas fa-truck"></i>
                                <span>Trade & supply chain experts</span>
                            </div>
                            <div class="judge-item">
                                <i class="fas fa-leaf"></i>
                                <span>ESG & sustainability advisors</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stage-card">
                <div class="stage-number">STAGE 3</div>
                <div class="stage-content">
                    <h3>JURY DELIBERATION & CONSENSUS MEETING</h3>
                    <p>Top-scoring entries are reviewed by a senior jury panel</p>
                    
                    <div class="ensures-list">
                        <h4>THIS ENSURES:</h4>
                        <ul>
                            <li><i class="fas fa-balance-scale"></i> Balanced evaluation</li>
                            <li><i class="fas fa-shield-alt"></i> Removal of bias</li>
                            <li><i class="fas fa-eye"></i> Holistic consideration of each entry's merit</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="stage-card">
                <div class="stage-number">STAGE 4</div>
                <div class="stage-content">
                    <h3>VALIDATION & AUDIT (IF REQUIRED)</h3>
                    <p>Certain categories may require:</p>
                    <div class="validation-items">
                        <div class="validation-item">
                            <i class="fas fa-search-location"></i>
                            <span>Site visit</span>
                        </div>
                        <div class="validation-item">
                            <i class="fas fa-certificate"></i>
                            <span>Certification verification</span>
                        </div>
                        <div class="validation-item">
                            <i class="fas fa-clipboard-check"></i>
                            <span>Supply chain audit</span>
                        </div>
                        <div class="validation-item">
                            <i class="fas fa-file-alt"></i>
                            <span>Additional documentation</span>
                        </div>
                    </div>
                    <p class="note">This protects the integrity of the awards</p>
                </div>
            </div>

            <div class="stage-card">
                <div class="stage-number">STAGE 5</div>
                <div class="stage-content">
                    <h3>FINAL SELECTION & CONFIDENTIAL RESULTS</h3>
                    <p>The final winners are endorsed by the Jury Board and remain confidential until the Awards Gala</p>
                    <div class="confidential-notice">
                        <i class="fas fa-lock"></i>
                        <span>Results remain strictly confidential until the official announcement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.judging-framework {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
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

.framework-header {
    text-align: center;
    margin-bottom: 3rem;
}

.framework-header h1 {
    font-size: 2.5rem;
    color: white;
    margin-bottom: 1.5rem;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.framework-intro {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.section-title {
    font-size: 2rem;
    color: white;
    text-align: center;
    margin-bottom: 3rem;
    font-weight: 600;
    position: relative;
}

.section-title::after {
    content: '';
    display: block;
    width: 100px;
    height: 3px;
    background: linear-gradient(90deg, #1a5f3f, #FFD700);
    margin: 1rem auto;
}

.stage-card {
    display: flex;
    margin-bottom: 2.5rem;
    background: rgba(255, 215, 0, 0.15);
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid rgba(255, 215, 0, 0.3);
}

.stage-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
}

.stage-number {
    background: linear-gradient(135deg, #1a5f3f, #2d5f3f);
    color: white;
    padding: 2rem 1.5rem;
    font-weight: 700;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 150px;
}

.stage-content {
    padding: 2rem;
    flex: 1;
}

.stage-content h3 {
    color: white;
    font-size: 1.5rem;
    margin-bottom: 1rem;
    font-weight: 600;
}

.stage-content p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.7;
    margin-bottom: 1.5rem;
}

.verification-list {
    background: rgba(255, 215, 0, 0.1);
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #FFD700;
}

.verification-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}

.verification-item i {
    color: #1a5f3f;
    margin-right: 0.5rem;
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
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 0.5rem;
}

.note {
    font-style: italic;
    color: #666;
    background: rgba(255, 248, 225, 0.8);
    padding: 0.75rem;
    border-radius: 6px;
    border-left: 3px solid #FFD700;
}

.judges-types h4 {
    color: white;
    margin-bottom: 1.5rem;
    font-weight: 600;
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
    background: rgba(255, 215, 0, 0.1);
    border-radius: 8px;
    transition: background 0.3s ease;
    border: 1px solid rgba(255, 215, 0, 0.2);
}

.judge-item:hover {
    background: rgba(255, 215, 0, 0.2);
}

.judge-item i {
    color: #1a5f3f;
    font-size: 1.2rem;
    margin-right: 0.75rem;
    width: 24px;
}

.judge-item span {
    color: rgba(255, 255, 255, 0.9);
}

.ensures-list h4 {
    color: white;
    margin-bottom: 1rem;
    font-weight: 600;
}

.ensures-list ul {
    list-style: none;
    padding: 0;
}

.ensures-list li {
    display: flex;
    align-items: center;
    padding: 0.75rem;
    background: rgba(255, 215, 0, 0.1);
    margin-bottom: 0.75rem;
    border-radius: 6px;
    border: 1px solid rgba(255, 215, 0, 0.2);
}

.ensures-list li i {
    color: #1a5f3f;
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
    background: rgba(255, 215, 0, 0.1);
    border-radius: 8px;
    border: 1px solid rgba(255, 215, 0, 0.2);
}

.validation-item i {
    color: #1a5f3f;
    font-size: 1.3rem;
    margin-right: 0.75rem;
}

.validation-item span {
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
}

.confidential-notice {
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #1a5f3f 0%, #2d5f3f 100%);
    color: white;
    padding: 1.25rem;
    border-radius: 8px;
    margin-top: 1.5rem;
}

.confidential-notice i {
    font-size: 1.5rem;
    margin-right: 1rem;
}

@media (max-width: 768px) {
    .stage-card {
        flex-direction: column;
    }
    
    .stage-number {
        min-width: auto;
        padding: 1rem;
    }
    
    .judge-grid,
    .validation-items {
        grid-template-columns: 1fr;
    }
    
    .framework-header h1 {
        font-size: 2rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
}
</style>
@endsection

