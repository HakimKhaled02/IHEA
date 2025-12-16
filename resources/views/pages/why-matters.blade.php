@extends('layouts.app')

@section('title', 'Why The International Halal Awards Matter')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/why-matters-page.css') }}">
@endpush

@section('content')
<div class="why-matters-page">
    <!-- Header Section -->
    <div class="why-header">
        <div class="header-badge">
            <i class="fas fa-star"></i>
            <span>Why The International Halal Awards Matter</span>
        </div>
        <h1 class="header-title">Why The International Halal Awards Matter</h1>
        <p class="header-mission">Our mission is to drive progress and enhance the lives of our customers by delivering superior products and services that exceed expectations and set new standards in the global Halal economy.</p>
    </div>

    <!-- Content Cards Grid -->
    <div class="why-cards-grid">
        <!-- Card 1 -->
        <div class="why-card">
            <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                <div class="card-overlay">
                    <div class="card-stat">
                        <span class="stat-number">30+</span>
                        <div class="stat-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                    </div>
                    <p class="stat-label">Happy Clients</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="why-card">
            <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                <div class="card-overlay">
                    <div class="card-stat">
                        <span class="stat-number">15+</span>
                        <div class="stat-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                    </div>
                    <p class="stat-label">Your Growth Partner</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="why-card">
            <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                <div class="card-overlay">
                    <div class="card-stat">
                        <span class="stat-number">35+</span>
                        <div class="stat-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                    </div>
                    <p class="stat-label">Happy Clients</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="why-card">
            <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                <div class="card-overlay">
                    <div class="card-stat">
                        <span class="stat-number">18+</span>
                        <div class="stat-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                    </div>
                    <p class="stat-label">Your Growth Partner</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
