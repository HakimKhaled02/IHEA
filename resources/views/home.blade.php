@extends('layouts.app')

@section('title', 'IHEC Awards 2026 - Home')

@section('content')
<div class="homepage">
    <div class="hero-section">
        <div class="hero-background">
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
            <div class="gradient-orb orb-3"></div>
        </div>
        
        <div class="hero-content">
            <div class="hero-logo-container">
                <div class="logo-glow"></div>
                <img src="{{ asset('assets/ihealogo.png') }}" alt="IHEC Logo" class="hero-logo-img">
            </div>
            
            <div class="hero-text-container">
                <h1 class="hero-title">
                    <span class="title-line">International</span>
                    <span class="title-line highlight">Halal Awards</span>
                    <span class="title-line year">2026</span>
                </h1>
                <p class="hero-subtitle">Celebrating Global Excellence. Honouring Integrity. Elevating the Halal Economy.</p>
            </div>
            
            <div class="hero-actions">
                <a href="{{ route('how-to-enter') }}" class="btn btn-primary btn-large btn-enter">
                    <span class="btn-text">Enter Awards</span>
                    <span class="btn-arrow">→</span>
                </a>
                <a href="{{ route('categories') }}" class="btn btn-secondary btn-large btn-view">
                    <span class="btn-text">View Categories</span>
                    <span class="btn-arrow">→</span>
                </a>
            </div>
        </div>
        
        <div class="hero-decoration">
            <div class="decoration-line line-1"></div>
            <div class="decoration-line line-2"></div>
        </div>
    </div>
</div>
@endsection

