@extends('layouts.app')

@section('title', 'Judging Criteria')

@section('content')
<div class="judging-criteria">
        <div class="page-header">
            <h1>Judging Criteria</h1>
            <p class="criteria-intro">
                The Awards evaluate performance using a comprehensive multi-dimensional scoring system tailored to Halal ethics, industry excellence, and global impact, below is the structured judging rubric:
            </p>
        </div>
        
        <!-- Visual Summary Bar -->
        <div class="summary-bar">
            <h3>Scoring Breakdown</h3>
            <div class="progress-container">
                <div class="progress-segment" style="width: 25%; background: linear-gradient(90deg, #FFD700, #FFA500);" title="Halal Integrity & Compliance: 25%">
                    <span>25%</span>
                </div>
                <div class="progress-segment" style="width: 20%; background: linear-gradient(90deg, #1a5f3f, #2d5f3f);" title="Innovation & Transformation: 20%">
                    <span>20%</span>
                </div>
                <div class="progress-segment" style="width: 20%; background: linear-gradient(90deg, #FFD700, #FFA500);" title="Market Performance & Impact: 20%">
                    <span>20%</span>
                </div>
                <div class="progress-segment" style="width: 15%; background: linear-gradient(90deg, #27ae60, #229954);" title="Sustainability & ESG: 15%">
                    <span>15%</span>
                </div>
                <div class="progress-segment" style="width: 20%; background: linear-gradient(90deg, #FFD700, #FFA500);" title="Strategic Execution: 20%">
                    <span>20%</span>
                </div>
            </div>
        </div>
        
        <!-- Hidden SVG for Gradients -->
        <svg style="display: none;">
            <defs>
                <linearGradient id="gold-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#FFD700"/>
                    <stop offset="100%" stop-color="#FFA500"/>
                </linearGradient>
                <linearGradient id="green-gradient-1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#1a5f3f"/>
                    <stop offset="100%" stop-color="#2d5f3f"/>
                </linearGradient>
                <linearGradient id="green-gradient-2" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#2d5f3f"/>
                    <stop offset="100%" stop-color="#1a5f3f"/>
                </linearGradient>
                <linearGradient id="green-gradient-3" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#27ae60"/>
                    <stop offset="100%" stop-color="#229954"/>
                </linearGradient>
                <linearGradient id="green-gradient-4" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#1a7f3f"/>
                    <stop offset="100%" stop-color="#0f5f2f"/>
                </linearGradient>
            </defs>
        </svg>
        
        <!-- Legend -->
        <div class="legend">
            <div class="legend-item">
                <div class="legend-color" style="background: linear-gradient(90deg, #FFD700, #FFA500);"></div>
                <span>Halal Integrity & Compliance</span>
            </div>
            <div class="legend-item">
                <div class="legend-color" style="background: linear-gradient(90deg, #1a5f3f, #2d5f3f);"></div>
                <span>Innovation & Transformation</span>
            </div>
            <div class="legend-item">
                <div class="legend-color" style="background: linear-gradient(90deg, #FFD700, #FFA500);"></div>
                <span>Market Performance & Impact</span>
            </div>
            <div class="legend-item">
                <div class="legend-color" style="background: linear-gradient(90deg, #27ae60, #229954);"></div>
                <span>Sustainability & ESG</span>
            </div>
            <div class="legend-item">
                <div class="legend-color" style="background: linear-gradient(90deg, #FFD700, #FFA500);"></div>
                <span>Strategic Execution</span>
            </div>
        </div>
        
        <div class="criteria-grid">
            <div class="criteria-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-header">
                    <div class="circular-progress" data-percent="25">
                        <svg width="80" height="80">
                            <circle cx="40" cy="40" r="35" stroke="#e0e0e0" stroke-width="8" fill="none"/>
                            <circle cx="40" cy="40" r="35" stroke="url(#gold-gradient)" stroke-width="8" fill="none"
                                    stroke-dasharray="220" stroke-dashoffset="165" stroke-linecap="round"
                                    transform="rotate(-90 40 40)"/>
                            <text x="40" y="40" text-anchor="middle" dy="7" font-size="18" font-weight="bold" fill="#333">25%</text>
                        </svg>
                    </div>
                    <div class="card-title">
                        <i class="fas fa-shield-alt"></i>
                        <h3>HALAL INTEGRITY & COMPLIANCE</h3>
                    </div>
                </div>
                <ul class="criteria-list">
                    <li><i class="fas fa-check"></i> Alignment with recognized Halal standards</li>
                    <li><i class="fas fa-check"></i> Transparency in certification and supply chain</li>
                    <li><i class="fas fa-check"></i> Ethical and Shariah-compliant practices</li>
                    <li><i class="fas fa-check"></i> Traceability & risk management</li>
                </ul>
            </div>

            <div class="criteria-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-header">
                    <div class="circular-progress" data-percent="20">
                        <svg width="80" height="80">
                            <circle cx="40" cy="40" r="35" stroke="#e0e0e0" stroke-width="8" fill="none"/>
                            <circle cx="40" cy="40" r="35" stroke="url(#green-gradient-1)" stroke-width="8" fill="none"
                                    stroke-dasharray="220" stroke-dashoffset="176" stroke-linecap="round"
                                    transform="rotate(-90 40 40)"/>
                            <text x="40" y="40" text-anchor="middle" dy="7" font-size="18" font-weight="bold" fill="#333">20%</text>
                        </svg>
                    </div>
                    <div class="card-title">
                        <i class="fas fa-lightbulb"></i>
                        <h3>INNOVATION & TRANSFORMATION</h3>
                    </div>
                </div>
                <ul class="criteria-list">
                    <li><i class="fas fa-check"></i> Introduction of new technologies, processes, or business models</li>
                    <li><i class="fas fa-check"></i> Creativity in solving industry challenges</li>
                    <li><i class="fas fa-check"></i> Enhancements to user or stakeholder experience</li>
                    <li><i class="fas fa-check"></i> Pioneering approaches in Halal markets</li>
                </ul>
            </div>

            <div class="criteria-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header">
                    <div class="circular-progress" data-percent="20">
                        <svg width="80" height="80">
                            <circle cx="40" cy="40" r="35" stroke="#e0e0e0" stroke-width="8" fill="none"/>
                            <circle cx="40" cy="40" r="35" stroke="url(#gold-gradient)" stroke-width="8" fill="none"
                                    stroke-dasharray="220" stroke-dashoffset="176" stroke-linecap="round"
                                    transform="rotate(-90 40 40)"/>
                            <text x="40" y="40" text-anchor="middle" dy="7" font-size="18" font-weight="bold" fill="#333">20%</text>
                        </svg>
                    </div>
                    <div class="card-title">
                        <i class="fas fa-chart-line"></i>
                        <h3>MARKET PERFORMANCE & IMPACT</h3>
                    </div>
                </div>
                <ul class="criteria-list">
                    <li><i class="fas fa-check"></i> Measurable business outcomes</li>
                    <li><i class="fas fa-check"></i> Revenue or export growth</li>
                    <li><i class="fas fa-check"></i> Market expansion or penetration</li>
                    <li><i class="fas fa-check"></i> Contribution to industry competitiveness</li>
                </ul>
            </div>

            <div class="criteria-card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-header">
                    <div class="circular-progress" data-percent="15">
                        <svg width="80" height="80">
                            <circle cx="40" cy="40" r="35" stroke="#e0e0e0" stroke-width="8" fill="none"/>
                            <circle cx="40" cy="40" r="35" stroke="url(#green-gradient-3)" stroke-width="8" fill="none"
                                    stroke-dasharray="220" stroke-dashoffset="187" stroke-linecap="round"
                                    transform="rotate(-90 40 40)"/>
                            <text x="40" y="40" text-anchor="middle" dy="7" font-size="18" font-weight="bold" fill="#333">15%</text>
                        </svg>
                    </div>
                    <div class="card-title">
                        <i class="fas fa-leaf"></i>
                        <h3>SUSTAINABILITY & ESG CONTRIBUTION</h3>
                    </div>
                </div>
                <ul class="criteria-list">
                    <li><i class="fas fa-check"></i> Environmental stewardship</li>
                    <li><i class="fas fa-check"></i> Social impact and community development</li>
                    <li><i class="fas fa-check"></i> Responsible governance practices</li>
                    <li><i class="fas fa-check"></i> Long-term positive outcomes</li>
                </ul>
            </div>

            <div class="criteria-card" data-aos="fade-up" data-aos-delay="500">
                <div class="card-header">
                    <div class="circular-progress" data-percent="20">
                        <svg width="80" height="80">
                            <circle cx="40" cy="40" r="35" stroke="#e0e0e0" stroke-width="8" fill="none"/>
                            <circle cx="40" cy="40" r="35" stroke="url(#gold-gradient)" stroke-width="8" fill="none"
                                    stroke-dasharray="220" stroke-dashoffset="176" stroke-linecap="round"
                                    transform="rotate(-90 40 40)"/>
                            <text x="40" y="40" text-anchor="middle" dy="7" font-size="18" font-weight="bold" fill="#333">20%</text>
                        </svg>
                    </div>
                    <div class="card-title">
                        <i class="fas fa-chess"></i>
                        <h3>STRATEGIC EXECUTION & EFFECTIVENESS</h3>
                    </div>
                </div>
                <ul class="criteria-list">
                    <li><i class="fas fa-check"></i> Clarity of objectives</li>
                    <li><i class="fas fa-check"></i> Strength of strategy</li>
                    <li><i class="fas fa-check"></i> Quality of implementation</li>
                    <li><i class="fas fa-check"></i> Evidence of success against goals</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

.judging-criteria {
    max-width: 1400px;
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
    position: relative;
}

.page-header h1 {
    font-size: 3rem;
    color: white;
    margin-bottom: 1.5rem;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.criteria-intro {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

/* Visual Summary Bar */
.summary-bar {
    background: rgba(255, 215, 0, 0.15);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 3rem;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    border: 1px solid rgba(255, 215, 0, 0.3);
}

.summary-bar h3 {
    text-align: center;
    color: white;
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
}

.progress-container {
    display: flex;
    height: 40px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
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

.progress-segment span {
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

/* Legend Styles */
.legend {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1.5rem;
    margin-bottom: 3rem;
    padding: 1.5rem;
    background: rgba(240, 244, 240, 0.5);
    backdrop-filter: blur(10px);
    border-radius: 15px;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.9rem;
    color: #2d5f3f;
    transition: transform 0.3s ease;
}

.legend-item:hover {
    transform: scale(1.05);
}

.legend-color {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
}

.criteria-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 2.5rem;
}

.criteria-card {
    background: rgba(255, 215, 0, 0.1);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(255, 215, 0, 0.3);
    position: relative;
}

.criteria-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--card-color, #1a5f3f), var(--card-color-dark, #2d5f3f));
}

.criteria-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.card-header {
    padding: 2rem;
    display: flex;
    align-items: center;
    gap: 1.5rem;
    background: linear-gradient(135deg, rgba(240, 244, 240, 0.9), rgba(232, 245, 232, 0.7));
}

.circular-progress {
    position: relative;
    animation: fadeInScale 0.8s ease-out;
}

.circular-progress svg {
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
}

.circular-progress circle:nth-child(2) {
    animation: progressAnimation 2s ease-out forwards;
    transform-origin: center;
}

.card-title {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 0.5rem;
}

.card-title i {
    font-size: 2rem;
    color: var(--card-color, #1a5f3f);
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
}

.card-title h3 {
    color: white;
    font-size: 1.3rem;
    font-weight: 600;
    margin: 0;
    line-height: 1.3;
}

.criteria-list {
    list-style: none;
    padding: 0 2rem 2rem;
    margin: 0;
}

.criteria-list li {
    display: flex;
    align-items: flex-start;
    padding: 1rem 0;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    transition: all 0.3s ease;
}

.criteria-list li:last-child {
    border-bottom: none;
}

.criteria-list li:hover {
    padding-left: 0.5rem;
    color: white;
}

.criteria-list li i {
    color: var(--card-color, #1a5f3f);
    margin-right: 1rem;
    margin-top: 2px;
    flex-shrink: 0;
    font-size: 1.1rem;
}

/* Set card-specific colors with green/gold variations */
.criteria-card:nth-child(1) {
    --card-color: #FFD700;
    --card-color-dark: #FFA500;
}

.criteria-card:nth-child(2) {
    --card-color: #1a5f3f;
    --card-color-dark: #2d5f3f;
}

.criteria-card:nth-child(3) {
    --card-color: #FFD700;
    --card-color-dark: #FFA500;
}

.criteria-card:nth-child(4) {
    --card-color: #27ae60;
    --card-color-dark: #229954;
}

.criteria-card:nth-child(5) {
    --card-color: #FFD700;
    --card-color-dark: #FFA500;
}

/* Animations */
@keyframes fadeInScale {
    from {
        opacity: 0;
        transform: scale(0.8);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes progressAnimation {
    from {
        stroke-dashoffset: 220;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .judging-criteria {
        padding: 1rem;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
    
    .criteria-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .card-header {
        flex-direction: column;
        text-align: center;
        padding: 1.5rem;
    }
    
    .card-title {
        align-items: center;
    }
    
    .card-title h3 {
        font-size: 1.1rem;
    }
    
    .progress-container {
        height: 30px;
    }
    
    .progress-segment {
        font-size: 0.8rem;
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

