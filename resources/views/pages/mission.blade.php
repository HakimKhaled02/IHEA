@extends('layouts.app')

@section('title', 'Mission & Purpose')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/mission-page.css') }}">
@endpush

@section('content')
<div class="mission-page">
    <div class="mission-hero">
        <div class="mission-hero-content">
            <div class="mission-logo">
                <img src="{{ asset('assets/ihealogo.png') }}" alt="IHEC Logo" class="mission-logo-img">
            </div>
            <h1 class="mission-title">Mission & Purpose</h1>
            <p class="mission-subtitle">Four Key Objectives for Global Halal Excellence</p>
        </div>
    </div>

    <div class="mission-content">
        <div class="mission-intro">
            <p class="intro-text">The International Halal Awards 2026 was created to serve four key objectives:</p>
        </div>

        <div class="mission-objectives">
            <div class="objective-block">
                <div class="block-header">
                    <div class="block-letter">A</div>
                    <div class="block-title-wrapper">
                        <h3 class="block-title">Celebrate Excellence in the Global Halal Ecosystem</h3>
                    </div>
                </div>
                <div class="block-content">
                    <p>To recognize organizations that exemplifies excellence in quality, compliance, innovation and business performance</p>
                </div>
            </div>

            <div class="objective-block">
                <div class="block-header">
                    <div class="block-letter">B</div>
                    <div class="block-title-wrapper">
                        <h3 class="block-title">Strengthen Global Confidence in Halal Standards</h3>
                    </div>
                </div>
                <div class="block-content">
                    <p>To elevate global trust by highlighting initiatives that adhere to the highest levels of Halal, ethical, sustainability and traceability requirements</p>
                </div>
            </div>

            <div class="objective-block">
                <div class="block-header">
                    <div class="block-letter">C</div>
                    <div class="block-title-wrapper">
                        <h3 class="block-title">Encourage Innovation & Industry Leadership</h3>
                    </div>
                </div>
                <div class="block-content">
                    <p>To inspire breakthrough ideas, responsible practices and forward-thinking strategies that contribute to the long-term growth of Halal industries</p>
                </div>
            </div>

            <div class="objective-block">
                <div class="block-header">
                    <div class="block-letter">D</div>
                    <div class="block-title-wrapper">
                        <h3 class="block-title">Foster International Cooperation & Market Expansion</h3>
                    </div>
                </div>
                <div class="block-content">
                    <p>To bring together global Halal stakeholders—government, industry leaders, investors, innovators and certification bodies—to build networks and unlock opportunities</p>
                </div>
            </div>
        </div>

        <div class="mission-closing">
            <p class="closing-text">The Awards stand as a global benchmark designed to honor leadership, integrity and progressive impact in an ever-expanding global Halal economy</p>
        </div>
    </div>
</div>
@endsection
