@extends('layouts.app')

@section('title', 'IHEC Awards 2026 - Home')

@section('content')
<div class="homepage">
    <div class="hero-section">
        <!-- Video Background -->
        <video autoplay muted loop playsinline preload="auto" class="background-video" id="bgVideo">
            <source src="{{ asset('assets/Ihea.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="video-overlay"></div>
        
        <!-- Top Navigation Buttons (Desktop) -->
        <div class="top-nav-buttons">
            <a href="#" class="btn btn-secondary btn-large btn-view">
                <i class="fas fa-download btn-icon"></i>
                <span class="btn-text">DOWNLOAD MODULE</span>
            </a>
            <a href="{{ route('eligibility') }}" class="btn btn-tertiary btn-large btn-contact">
                <i class="fas fa-question-circle btn-icon"></i>
                <span class="btn-text">AM I ELIGIBLE?</span>
            </a>
        </div>
        
        <!-- Top Navigation Dropdown (Mobile Only) -->
        <div class="top-nav-dropdown">
            <button class="dropdown-toggle" id="topNavDropdown">
                <i class="fas fa-chevron-down dropdown-icon"></i>
            </button>
            <div class="dropdown-menu" id="dropdownMenu">
                <a href="#" class="dropdown-item">
                    <i class="fas fa-download btn-icon"></i>
                    <span class="btn-text">DOWNLOAD MODULE</span>
                </a>
                <a href="{{ route('eligibility') }}" class="dropdown-item">
                    <i class="fas fa-question-circle btn-icon"></i>
                    <span class="btn-text">AM I ELIGIBLE?</span>
                </a>
            </div>
        </div>
        
        <div class="hero-content">
            <div class="hero-logo-container">
                <div class="logo-glow"></div>
                <img src="{{ asset('assets/ihealogo.png') }}" alt="IHEC Logo" class="hero-logo-img">
            </div>
            
            <div class="hero-text-container">
                <h1 class="hero-title">
                    INTERNATIONAL HALAL ECONOMIC<br>AWARD (IHEA) 2026
                </h1>
                <p class="hero-subtitle">5 Feb 2026 (Thu)  |  7.30 pm - 11.00pm  |  Tenera Hotel & Suites, Bangi</p>
            </div>
            
            <!-- Center Boxes -->
            <div class="center-boxes">
                <a href="{{ route('how-to-enter') }}" class="how-to-join-link">
                    <h3 class="box-title">HOW TO JOIN ?</h3>
                </a>
                <div class="center-boxes-bottom">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeCURjiSDPnTe07wafiEtYrgO1YSytYcXkjtI2sKrfEnoZ-mg/viewform" target="_blank" class="center-box">
                        <h3 class="box-title">REGISTER</h3>
                    </a>
                    
                    <a href="{{ route('contact') }}" class="center-box">
                        <h3 class="box-title">CONTACT US</h3>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        
    </div>
    
    <!-- Evening Gala Section -->
    <div class="gala-section">
        <div class="gala-container">
            <div class="gala-header">
                <h2 class="gala-title">Evening Gala & Global Recognition (IHEA 2026)</h2>
                <div class="gala-subtitle">An exclusive evening celebrating excellence in the Halal economy</div>
            </div>
            
            <div class="gala-timeline">
                <div class="timeline-item">
                    <div class="timeline-time">7:00 PM</div>
                    <div class="timeline-content">
                        <h3>Arrival of Guests</h3>
                        <p>Invited attendees, international delegates, industry leaders, and VIP guests arrive and are escorted to their designated seats.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:00 PM</div>
                    <div class="timeline-content">
                        <h3>Arrival of the Deputy Prime Minister</h3>
                        <p>Formal announcement of the arrival of YAB Deputy Prime Minister and escort to the VVIP table.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:15 PM</div>
                    <div class="timeline-content">
                        <h3>Welcome Address by the Chairman of IIHE–CIHE</h3>
                        <p>Opening remarks delivered by the Chairman to commence the Gala Evening.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:30 PM</div>
                    <div class="timeline-content">
                        <h3>Official Address by YAB Deputy Prime Minister</h3>
                        <p>Keynote speech highlighting Malaysia's direction in advancing the national and global Halal Economy.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">8:45 PM</div>
                    <div class="timeline-content">
                        <h3>Official Launch of the International Institute of Halal Economy (IIHE)</h3>
                        <p>Grand unveiling of IIHE accompanied by a special video montage and symbolic officiation.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">9:00 PM</div>
                    <div class="timeline-content">
                        <h3>International Artist Performance (Segment 1)</h3>
                        <p>Opening performance to elevate the evening's ambience and entertainment.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">9:15 PM</div>
                    <div class="timeline-content">
                        <h3>Presentation of 10 Awards (Halal International Award 2025 – Phase 1)</h3>
                        <p>Awarding of the first ten prestigious categories to selected recipients.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">9:45 PM</div>
                    <div class="timeline-content">
                        <h3>International Artist Performance (Segment 2)</h3>
                        <p>Second performance segment offering cultural and artistic enrichment.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">10:00 PM</div>
                    <div class="timeline-content">
                        <h3>Presentation of 5 Awards (Halal International Award 2025 – Phase 2)</h3>
                        <p>Awarding of the final five categories, completing the full set of 15 awards.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">11:00 PM</div>
                    <div class="timeline-content">
                        <h3>Group Photo with Award Recipients & VIPs</h3>
                        <p>Official photography session involving VIPs, award winners, and honoured guests.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-time">11:00 PM</div>
                    <div class="timeline-content">
                        <h3>Media Session & Adjournment</h3>
                        <p>Brief press conference with organisers and award recipients followed by the conclusion of the gala event.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('bgVideo');
        
        // Ensure video plays
        video.play().catch(function(error) {
            console.log('Video autoplay failed:', error);
            // Fallback: add background image if video fails
            document.querySelector('.hero-section').style.background = 'linear-gradient(135deg, #0a0a0a 0%, #064e3b 50%, #0a0a0a 100%)';
        });
        
        // Retry loading video if it fails
        video.addEventListener('error', function() {
            console.log('Video loading error, applying fallback background');
            document.querySelector('.hero-section').style.background = 'linear-gradient(135deg, #0a0a0a 0%, #064e3b 50%, #0a0a0a 100%)';
        });
        
        // Dropdown menu toggle
        const dropdownToggle = document.getElementById('topNavDropdown');
        const dropdownMenu = document.getElementById('dropdownMenu');
        
        if (dropdownToggle && dropdownMenu) {
            dropdownToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdownToggle.classList.toggle('active');
                dropdownMenu.classList.toggle('active');
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownToggle.classList.remove('active');
                    dropdownMenu.classList.remove('active');
                }
            });
        }
    });
</script>
@endpush

