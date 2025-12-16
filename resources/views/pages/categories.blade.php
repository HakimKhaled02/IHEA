@extends('layouts.app')

@section('title', 'Award Categories')

@section('content')
<div class="page-content">
    <h1>Award Categories</h1>
    
    <p>The International Halal Awards 2026 features 15 prestigious categories recognizing excellence across the Halal economy:</p>
    
    <div class="categories-list">
        <div class="category-item">
            <h3>1. Global Halal Industry Leadership Award</h3>
            <p>Recognising outstanding leadership that drives significant advancement of the global Halal Economy.</p>
        </div>
        
        <div class="category-item">
            <h3>2. Excellence in Halal Certification & Compliance Award</h3>
            <p>Honouring organisations that uphold the highest standards of Halal integrity, governance, and compliance.</p>
        </div>
        
        <div class="category-item">
            <h3>3. Halal Innovation & Technology Transformation Award</h3>
            <p>Celebrating groundbreaking advancements in Halal digitalisation, blockchain, AI, IoT, or automation.</p>
        </div>
        
        <div class="category-item">
            <h3>4. Outstanding Halal Exporter of the Year Award</h3>
            <p>Acknowledging globally competitive Halal brands with exceptional export performance.</p>
        </div>
        
        <div class="category-item">
            <h3>5. Halal Sustainability & ESG Leadership Award</h3>
            <p>Recognising organisations integrating Halal, sustainability, and ESG principles with measurable impact.</p>
        </div>
        
        <div class="category-item">
            <h3>6. Halal Supply Chain & Logistics Excellence Award</h3>
            <p>Honouring leaders in Halal logistics, cold chain assurance, and international traceability.</p>
        </div>
        
        <div class="category-item">
            <h3>7. Halal F&B Excellence Award</h3>
            <p>Celebrating exceptional quality, innovation, and market impact in Halal food and beverage production.</p>
        </div>
        
        <div class="category-item">
            <h3>8. Halal Pharmaceuticals & Health Products Excellence Award</h3>
            <p>Highlighting leadership in Halal pharmaceuticals, nutraceuticals, medical devices, and wellness solutions.</p>
        </div>
        
        <div class="category-item">
            <h3>9. Halal Cosmetics & Personal Care Excellence Award</h3>
            <p>Recognising Halal-certified brands known for innovation, safety, and global competitiveness.</p>
        </div>
        
        <div class="category-item">
            <h3>10. Halal Digital Economy Pioneer Award</h3>
            <p>Celebrating innovators driving digital platforms, e-commerce, certification technologies, and Halal fintech.</p>
        </div>
        
        <div class="category-item">
            <h3>11. Halal-Friendly Tourism & Hospitality Excellence Award</h3>
            <p>Honouring organisations delivering world-class Muslim-friendly tourism and hospitality services.</p>
        </div>
        
        <div class="category-item">
            <h3>12. Halal SME of the Year Award</h3>
            <p>Acknowledging SMEs achieving outstanding performance, innovation, and international readiness.</p>
        </div>
        
        <div class="category-item">
            <h3>13. Lifetime Achievement Award in the Global Halal Economy</h3>
            <p>Recognising individuals with exceptional long-term contributions to Halal industry development.</p>
        </div>
        
        <div class="category-item">
            <h3>14. Young Halal Entrepreneur Award</h3>
            <p>Celebrating rising leaders under 40 shaping the next wave of Halal economic growth.</p>
        </div>
        
        <div class="category-item">
            <h3>15. Global Halal Education, Research & Knowledge Leadership Award</h3>
            <p>Honouring institutions or individuals advancing Halal research, standards, academia, or policy innovation.</p>
        </div>
    </div>
</div>

<style>
.categories-list {
    margin-top: 2rem;
}

.category-item {
    background: var(--ihec-bg-secondary);
    border: 1px solid rgba(0, 168, 150, 0.2);
    border-radius: 8px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    transition: all 0.3s ease;
}

.category-item:hover {
    border-color: var(--ihec-teal);
    transform: translateX(5px);
}

.category-item h3 {
    color: var(--ihec-teal-light);
    margin: 0 0 0.75rem 0;
    font-size: 1.25rem;
}

.category-item p {
    margin: 0;
    color: var(--ihec-text-secondary);
}
</style>
@endsection

