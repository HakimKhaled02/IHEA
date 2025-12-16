@extends('layouts.app')

@section('title', 'Awards Participation Fees & Prestige Packages')

@section('content')
<div class="page-content">
    <h1>Awards Participation Fees & Prestige Packages</h1>
    
    <h2>Entry Fees</h2>
    <p>Standard entry fees apply for each category submission. Please contact us for current pricing and package details.</p>
    
    <h2>Prestige Packages</h2>
    <p>We offer various prestige packages that include:</p>
    <ul>
        <li>Multiple category entries</li>
        <li>Priority judging consideration</li>
        <li>Enhanced media coverage</li>
        <li>VIP access to awards ceremony</li>
        <li>Networking opportunities</li>
        <li>Marketing and promotional support</li>
    </ul>
    
    <h2>Payment Terms</h2>
    <p>All fees must be paid in full before the submission deadline. Payment methods and terms are specified in the entry form.</p>
    
    <h2>Contact for Pricing</h2>
    <p>For detailed pricing information and custom package options, please contact our awards team.</p>
    
    <div class="cta-section">
        <a href="{{ route('how-to-enter') }}" class="btn btn-primary btn-large">Get Started</a>
    </div>
</div>
@endsection

