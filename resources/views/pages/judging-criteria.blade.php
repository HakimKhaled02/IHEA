@extends('layouts.app')

@section('title', 'Judging Criteria')

@section('content')
<div class="page-content">
    <h1>Judging Criteria</h1>
    
    <p>Entries are evaluated based on the following criteria, with each criterion weighted according to the specific award category:</p>
    
    <h2>1. Excellence & Innovation (30%)</h2>
    <ul>
        <li>Demonstrated excellence in the field</li>
        <li>Innovation and creativity</li>
        <li>Uniqueness of approach or solution</li>
        <li>Technical or professional excellence</li>
    </ul>
    
    <h2>2. Impact & Significance (25%)</h2>
    <ul>
        <li>Measurable impact on the industry or community</li>
        <li>Significance of achievements</li>
        <li>Reach and scale of influence</li>
        <li>Long-term value creation</li>
    </ul>
    
    <h2>3. Compliance & Integrity (20%)</h2>
    <ul>
        <li>Adherence to Halal standards and certifications</li>
        <li>Ethical business practices</li>
        <li>Transparency and accountability</li>
        <li>Regulatory compliance</li>
    </ul>
    
    <h2>4. Sustainability & ESG (15%)</h2>
    <ul>
        <li>Environmental responsibility</li>
        <li>Social impact and community engagement</li>
        <li>Sustainable business practices</li>
        <li>ESG integration</li>
    </ul>
    
    <h2>5. Market Performance (10%)</h2>
    <ul>
        <li>Business growth and financial performance</li>
        <li>Market presence and competitiveness</li>
        <li>Customer satisfaction and loyalty</li>
        <li>Export performance (where applicable)</li>
    </ul>
</div>
@endsection

