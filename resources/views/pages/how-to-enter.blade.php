@extends('layouts.app')

@section('title', 'How To Enter')

@section('content')
<div class="page-content">
    <h1>How To Enter</h1>
    
    <h2>Step 1: Choose Your Category</h2>
    <p>Review all available award categories and select the one that best matches your achievements or organization's excellence.</p>
    
    <h2>Step 2: Prepare Your Submission</h2>
    <p>Gather all required documentation and prepare your entry according to the submission guidelines. Ensure all information is accurate and up-to-date.</p>
    
    <h2>Step 3: Complete the Entry Form</h2>
    <p>Fill out the official entry form with all required information, including:</p>
    <ul>
        <li>Organization or individual details</li>
        <li>Category selection</li>
        <li>Supporting documentation</li>
        <li>Statement of achievement</li>
    </ul>
    
    <h2>Step 4: Submit Your Entry</h2>
    <p>Submit your completed entry form along with all required documentation before the submission deadline.</p>
    
    <h2>Step 5: Confirmation</h2>
    <p>You will receive a confirmation email upon successful submission. Keep this for your records.</p>
    
    <div class="cta-section">
        <a href="{{ route('awards.create') }}" class="btn btn-primary btn-large">Start Your Entry</a>
    </div>
</div>
@endsection

