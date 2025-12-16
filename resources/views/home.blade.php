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
        
        <a href="#" class="download-module-btn">
            <i class="fas fa-download btn-icon"></i>
            <span class="btn-text">DOWNLOAD MODULE</span>
        </a>
        
        <div class="hero-content">
            <div class="hero-logo-container">
                <div class="logo-glow"></div>
                <img src="{{ asset('assets/ihealogo.png') }}" alt="IHEC Logo" class="hero-logo-img">
            </div>
            
            <div class="hero-text-container">
                <h1 class="hero-title">
                    INTERNATIONAL HALAL ECONOMIC AWARD (IHEA)
                </h1>
                <div class="hero-year">2026</div>
                <p class="hero-subtitle">Celebrating Global Excellence.</p>
            </div>
            
            <div class="hero-actions">
                <a href="{{ route('how-to-enter') }}" class="btn btn-secondary btn-large btn-view">
                    <i class="fas fa-user-check btn-icon"></i>
                    <span class="btn-text">REGISTER</span>
                </a>
                <a href="{{ route('contact') }}" class="btn btn-tertiary btn-large btn-contact">
                    <i class="fas fa-envelope btn-icon"></i>
                    <span class="btn-text">CONTACT US</span>
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

