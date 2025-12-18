@extends('layouts.app')

@section('title', 'Mission & Purpose')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/mission-page.css') }}">
@endpush

@section('content')
<div class="mission-page">
    <!-- Content Section -->
    <div class="mission-content-wrapper">
        <div class="mission-content-grid">
            <!-- Left Column -->
            <div class="mission-left-column">
                <h2 class="section-heading">Mission & Purpose</h2>
                <h3 class="mission-main-title">INTERNATIONAL HALAL ECONOMIC AWARD (IHEA)</h3>
                <p class="mission-description">The International Halal Economic Award 2026 was created to serve four key objectives.</p>
                
                <div class="objectives-left">
                    <div class="objective-item">
                        <i class="fas fa-trophy objective-icon"></i>
                        <div class="objective-details">
                            <h4 class="objective-title">CELEBRATE EXCELLENCE IN THE GLOBAL HALAL ECOSYSTEM</h4>
                            <p class="objective-text">To recognize organizations that exemplifies excellence in quality, compliance, innovation and business performance</p>
                        </div>
                    </div>

                    <div class="objective-item">
                        <i class="fas fa-shield-alt objective-icon"></i>
                        <div class="objective-details">
                            <h4 class="objective-title">STRENGTHEN GLOBAL CONFIDENCE IN HALAL STANDARDS</h4>
                            <p class="objective-text">To elevate global trust by highlighting initiatives that adhere to the highest levels of Halal, ethical, sustainability and traceability requirements</p>
                        </div>
                    </div>

                    <div class="objective-item">
                        <i class="fas fa-lightbulb objective-icon"></i>
                        <div class="objective-details">
                            <h4 class="objective-title">ENCOURAGE INNOVATION & INDUSTRY LEADERSHIP</h4>
                            <p class="objective-text">To inspire breakthrough ideas, responsible practices and forward-thinking strategies that contribute to the long-term growth of Halal industries</p>
                        </div>
                    </div>

                    <div class="objective-item">
                        <i class="fas fa-globe objective-icon"></i>
                        <div class="objective-details">
                            <h4 class="objective-title">FOSTER INTERNATIONAL COOPERATION & MARKET EXPANSION</h4>
                            <p class="objective-text">To bring together global Halal stakeholders—government, industry leaders, investors, innovators and certification bodies—to build networks and unlock opportunities</p>
                        </div>
                    </div>

                    <div class="mission-closing">
                        <p class="closing-text">The Awards stand as a global benchmark designed to honor leadership, integrity and progressive impact in an ever-expanding global Halal economy</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="mission-right-column">
            </div>
        </div>
    </div>
</div>
@endsection
