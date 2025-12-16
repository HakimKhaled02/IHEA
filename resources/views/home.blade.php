@extends('layouts.app')

@section('title', 'IHEC Awards 2026 - Home')

@section('content')
<div class="homepage">
    <div class="hero-section">
        <div class="hero-logo">
            <img src="{{ asset('assets/iheclogo1.png') }}" alt="IHEC Logo" class="hero-logo-img">
        </div>
        <h1 class="hero-title">International Halal Awards 2026</h1>
        <p class="hero-subtitle">Celebrating Global Excellence. Honouring Integrity. Elevating the Halal Economy.</p>
        <div class="hero-actions">
            <a href="{{ route('how-to-enter') }}" class="btn btn-primary btn-large">Enter Awards</a>
            <a href="{{ route('categories') }}" class="btn btn-secondary btn-large">View Categories</a>
        </div>
    </div>

    <div class="features-section">
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <h3>15 Award Categories</h3>
                <p>Recognizing excellence across industries in the Halal economy</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌍</div>
                <h3>Global Recognition</h3>
                <p>Celebrating outstanding achievements worldwide</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">✨</h3>
                <h3>Prestigious Platform</h3>
                <p>Join the most influential Halal economy gathering</p>
            </div>
        </div>
    </div>

    <div class="quick-links">
        <h2>Quick Links</h2>
        <div class="links-grid">
            <a href="{{ route('about') }}" class="quick-link-card">
                <span class="link-icon">📋</span>
                <span class="link-text">About Awards</span>
            </a>
            <a href="{{ route('eligibility') }}" class="quick-link-card">
                <span class="link-icon">✓</span>
                <span class="link-text">Eligibility</span>
            </a>
            <a href="{{ route('how-to-enter') }}" class="quick-link-card">
                <span class="link-icon">📝</span>
                <span class="link-text">How to Enter</span>
            </a>
            <a href="{{ route('faq') }}" class="quick-link-card">
                <span class="link-icon">❓</span>
                <span class="link-text">FAQ's</span>
            </a>
        </div>
    </div>
</div>
@endsection

