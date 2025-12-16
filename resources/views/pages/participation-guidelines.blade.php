@extends('layouts.app')

@section('title', 'Participation Guidelines & Submission')

@section('content')
<div class="page-content">
    <h1>Participation Guidelines & Submission</h1>
    
    <p>International Halal Economic Awards 2026</p>
    
    <!-- SECTION 1: ELIGIBILITY REQUIREMENTS -->
    <h2>Eligibility Requirements</h2>
    
    <h3>Who Can Enter:</h3>
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
    
    <h3>Eligibility Rules:</h3>
    <ul>
        <li>Entries must demonstrate clear Halal relevance, compliance, or impact.</li>
        <li>Achievements must be active within 2023–2026.</li>
        <li>Evidence of Halal certification is required for categories involving food, cosmetics, pharmaceuticals, or supply chains.</li>
        <li>Joint entries are allowed; organizations may enter multiple categories.</li>
    </ul>
    
    <!-- SECTION 2: HOW TO ENTER -->
    <h2>How To Enter</h2>
    
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
    <h2>Submission Rules</h2>
    
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
    background: var(--ihec-bg-secondary);
    border: 1px solid rgba(0, 168, 150, 0.2);
    border-radius: 8px;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.eligibility-item:hover {
    border-color: var(--ihec-teal);
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
