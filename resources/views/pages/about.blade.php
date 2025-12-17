@extends('layouts.app')

@section('title', 'About INTERNATIONAL HALAL ECONOMIC AWARD (IHEA) 2026')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about-page.css') }}">
@endpush

@section('content')
<div class="about-section-wrapper">
    <div class="about-page">
        <div class="about-image-column">
            <img src="{{ asset('assets/aboutpage1.jpg') }}" alt="About IHEA 2026" class="about-page-image">
        </div>
        <div class="about-content-column">
            <div class="about-hero">
                <div class="about-hero-content">
                    <h1 class="about-title">INTERNATIONAL HALAL ECONOMIC AWARD (IHEA) <span class="year-highlight">2026</span></h1>
                    <p class="about-subtitle">Premier Global Platform for Halal Excellence</p>
                </div>
            </div>

            <div class="about-content">
                <div class="about-intro">
                    <div class="intro-icon">🏆</div>
                    <h2>About IHEA 2026</h2>
                    <p class="lead-text">The INTERNATIONAL HALAL ECONOMIC AWARD (IHEA) 2026 is the premier global platform dedicated to recognizing outstanding achievements across the Halal economy. Established under the flagship International Halal Economy Conference (IHEC) 2026, this prestigious awards programme honors organizations, leaders and innovators who demonstrate excellence in Halal integrity, ethical practices, sustainable development, and impactful market performance.</p>
                </div>

                <div class="about-section">
                    <div class="section-header">
                        <i class="fas fa-globe section-icon"></i>
                        <h3>Global Halal Economy</h3>
                    </div>
                    <p>As the Halal industry evolves into a multi-trillion-dollar global force, the demand for trusted brands, compliant systems, sustainable supply chains, and transparent governance has never been greater. The INTERNATIONAL HALAL ECONOMIC AWARD (IHEA) 2026 seeks to highlight and celebrate the individuals and organizations who push boundaries, elevate standards, and contribute meaningfully to the advancement of the global Halal landscape.</p>
                </div>

                <div class="about-section">
                    <div class="section-header">
                        <i class="fas fa-industry section-icon"></i>
                        <h3>Industry Coverage</h3>
                    </div>
                    <p>From agriculture and food security to finance, technology, logistics, lifestyle and ESG, the Awards showcase the breadth and influence of Halal across industries, markets and cultures.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

