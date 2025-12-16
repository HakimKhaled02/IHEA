@extends('layouts.app')

@section('title', 'Why The International Halal Economic Award (IHEA) Matter')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/why-matters-page.css') }}">
@endpush

@section('content')
<div class="why-matters-page">
    <!-- Header Section -->
    <div class="why-header">
        <h1 class="header-title">WHY THE INTERNATIONAL HALAL ECONOMIC AWARD(IHEA) MATTER</h1>
        <p class="header-mission">In today's interconnected marketplace, Halal is no longer restricted to food—it represents a global movement toward ethics, sustainability, transparency, and trust. The International Halal Economic Award (IHEA) 2026 provides:</p>
    </div>

    <!-- Content Cards Grid -->
    <div class="why-cards-grid">
        <!-- Card A -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-award"></i>
                            </div>
                            <h3 class="card-title">UNMATCHED GLOBAL RECOGNITION</h3>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">UNMATCHED GLOBAL RECOGNITION</h3>
                    <p class="card-description">Winning at the International Halal Economic Award (IHEA) sets a powerful standard of excellence, strengthening your organization's global reputation and credibility among buyers, investors, regulators, and consumers.</p>
                </div>
            </div>
        </div>

        <!-- Card B -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-star"></i>
                            </div>
                            <h3 class="card-title">A BENCHMARK FOR HALAL EXCELLENCE</h3>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">A BENCHMARK FOR HALAL EXCELLENCE</h3>
                    <p class="card-description">The Awards function as a prestigious benchmark for:</p>
                    <ul class="card-list">
                        <li>Halal compliance</li>
                        <li>Ethical governance</li>
                        <li>Sustainability</li>
                        <li>Quality control</li>
                        <li>Innovation and impact</li>
                    </ul>
                    <p class="card-description">This demonstrates that your organization meets — and exceeds — global expectations</p>
                </div>
            </div>
        </div>

        <!-- Card C -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-handshake"></i>
                            </div>
                            <h3 class="card-title">STRENGTHEN TRUST WITH CONSUMERS & PARTNERS</h3>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">STRENGTHEN TRUST WITH CONSUMERS & PARTNERS</h3>
                    <p class="card-description">In a world where trust drives decisions, receiving an International Halal Economic Award (IHEA) signals:</p>
                    <ul class="card-list">
                        <li>Integrity</li>
                        <li>Reliability</li>
                        <li>Authenticity</li>
                        <li>Consistent Halal Compliance</li>
                        <li>Excellence In Delivery</li>
                    </ul>
                    <p class="card-description">Trust is a competitive advantage, and winners gain it instantly</p>
                </div>
            </div>
        </div>

        <!-- Card D -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-chart-line"></i>
                            </div>
                            <h3 class="card-title">COMPETITIVE DIFFERENTIATION</h3>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">COMPETITIVE DIFFERENTIATION</h3>
                    <p class="card-description">Award recipients stand apart from competitors with:</p>
                    <ul class="card-list">
                        <li>Superior Visibility</li>
                        <li>Market Differentiation</li>
                        <li>Enhanced Brand Authority</li>
                    </ul>
                    <p class="card-description">A Halal award win strengthens your unique value proposition domestically and internationally</p>
                </div>
            </div>
        </div>

        <!-- Card E -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-globe-americas"></i>
                            </div>
                            <h3 class="card-title">GAIN ACCESS TO GLOBAL MARKETS</h3>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">GAIN ACCESS TO GLOBAL MARKETS</h3>
                    <p class="card-description">Winning attracts:</p>
                    <ul class="card-list">
                        <li>Distributors</li>
                        <li>Export Partners</li>
                        <li>International Agencies</li>
                        <li>GCC, ASEAN, Africa, and EU buyers</li>
                    </ul>
                    <p class="card-description">Doors open for new market expansion once your brand carries globally recognized Halal excellence credentials</p>
                </div>
            </div>
        </div>

        <!-- Card F -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-dollar-sign"></i>
                            </div>
                            <h3 class="card-title">ATTRACT INVESTORS & FUNDING OPPORTUNITIES</h3>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">ATTRACT INVESTORS & FUNDING OPPORTUNITIES</h3>
                    <p class="card-description">Investors trust brands with:</p>
                    <ul class="card-list">
                        <li>Verified Halal Integrity</li>
                        <li>Ethical And Sustainable Operations</li>
                        <li>Proven Market Performance</li>
                    </ul>
                    <p class="card-description">Winning helps secure capital, partnerships, and long-term investment growth</p>
                </div>
            </div>
        </div>

        <!-- Card G -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-users"></i>
                            </div>
                            <h3 class="card-title">TALENT ATTRACTION & EMPLOYER BRANDING</h3>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">TALENT ATTRACTION & EMPLOYER BRANDING</h3>
                    <p class="card-description">Recognized organizations attract:</p>
                    <ul class="card-list">
                        <li>Higher-Quality Talent</li>
                        <li>More Committed Employees</li>
                        <li>Strong Organizational Reputation</li>
                    </ul>
                    <p class="card-description">Employees feel proud to work for an award-winning institution</p>
                </div>
            </div>
        </div>

        <!-- Card H -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/background.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-bullhorn"></i>
                            </div>
                            <h3 class="card-title">MEDIA VISIBILITY & BRAND ELEVATION</h3>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">MEDIA VISIBILITY & BRAND ELEVATION</h3>
                    <p class="card-description">Winners receive extensive publicity through:</p>
                    <ul class="card-list">
                        <li>press releases</li>
                        <li>media interviews</li>
                        <li>social media campaigns</li>
                        <li>partnerships with Halal networks</li>
                    </ul>
                    <p class="card-description">Your story becomes part of the global Halal narrative</p>
                </div>
            </div>
        </div>

        <!-- Card I -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-image" style="background-image: url('{{ asset('assets/aboutpage.jpg') }}');">
                        <div class="card-overlay">
                            <div class="card-icon-badge">
                                <i class="far fa-trophy"></i>
                            </div>
                            <h3 class="card-title">LEGACY & LONG-TERM VALUE</h3>
                            <p class="card-subtitle">Click to learn more</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back">
                    <h3 class="card-title-back">LEGACY & LONG-TERM VALUE</h3>
                    <p class="card-description">Winners are permanently listed in:</p>
                    <ul class="card-list">
                        <li>The International Halal Economic Award (IHEA) Archive</li>
                        <li>Digital Platforms</li>
                        <li>Global Publications</li>
                        <li>IHEC Promotional Materials</li>
                    </ul>
                    <p class="card-description">This establishes a legacy of excellence that strengthens your organization for years to come</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const flipCards = document.querySelectorAll('.flip-card');
    
    flipCards.forEach(card => {
        card.addEventListener('click', function() {
            this.classList.toggle('flipped');
        });
    });
});
</script>
@endsection
