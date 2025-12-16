@extends('layouts.app')

@section('title', 'FAQ\'s')

@section('content')
<div class="page-content">
    <h1>Frequently Asked Questions</h1>
    
    <div class="faq-list">
        <div class="faq-item">
            <h3>Who can enter the International Halal Awards?</h3>
            <p>Any organization, individual, or project operating in the Halal economy that meets the eligibility requirements can enter the awards.</p>
        </div>
        
        <div class="faq-item">
            <h3>How much does it cost to enter?</h3>
            <p>Please refer to the Awards Participation Fees & Prestige Packages section for detailed pricing information.</p>
        </div>
        
        <div class="faq-item">
            <h3>Can I enter multiple categories?</h3>
            <p>Yes, you can submit entries for multiple categories, but each entry must be unique and tailored to the specific category.</p>
        </div>
        
        <div class="faq-item">
            <h3>What is the submission deadline?</h3>
            <p>Submission deadlines are announced on the official website. Late submissions are not accepted.</p>
        </div>
        
        <div class="faq-item">
            <h3>How are winners selected?</h3>
            <p>Winners are selected by an independent panel of expert judges using a rigorous evaluation framework based on excellence, impact, compliance, sustainability, and market performance.</p>
        </div>
        
        <div class="faq-item">
            <h3>When will winners be announced?</h3>
            <p>Winners are announced at the official awards ceremony. Finalists are typically notified in advance.</p>
        </div>
        
        <div class="faq-item">
            <h3>Is my information kept confidential?</h3>
            <p>Yes, all entry information is treated as strictly confidential. Only authorized personnel and judges have access to submission details.</p>
        </div>
    </div>
</div>

<style>
.faq-list {
    margin-top: 2rem;
}

.faq-item {
    background: var(--ihec-bg-secondary);
    border: 1px solid rgba(0, 168, 150, 0.2);
    border-radius: 8px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
}

.faq-item h3 {
    color: var(--ihec-teal-light);
    margin: 0 0 0.75rem 0;
    font-size: 1.25rem;
}

.faq-item p {
    margin: 0;
    color: var(--ihec-text-secondary);
    line-height: 1.7;
}
</style>
@endsection

