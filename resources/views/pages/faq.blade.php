@extends('layouts.app')

@section('title', 'Frequently Asked Questions')

@push('styles')
<style>
    @keyframes geometric-rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    @keyframes shimmer-gold {
        0% { background-position: -1000px 0; }
        100% { background-position: 1000px 0; }
    }
    @keyframes gradient-shift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(212, 175, 55, 0.4); }
        50% { box-shadow: 0 0 40px rgba(212, 175, 55, 0.8); }
    }
    @keyframes pulse-slow {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes particle-float {
        0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(-100vh) rotate(720deg); opacity: 0; }
    }
    @keyframes shine-sweep {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
    
    @keyframes live-gradient {
        0% { background-position: 0% 50%; }
        25% { background-position: 100% 50%; }
        50% { background-position: 100% 100%; }
        75% { background-position: 0% 100%; }
        100% { background-position: 0% 50%; }
    }
    
    .islamic-pattern {
        background-image:
            repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(5, 150, 105, 0.04) 35px, rgba(5, 150, 105, 0.04) 70px),
            repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(212, 175, 55, 0.04) 35px, rgba(212, 175, 55, 0.04) 70px);
    }
    
    .glass-morphism {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .glass-morphism-dark {
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(212, 175, 55, 0.2);
    }
    
    .gradient-border {
        position: relative;
        background: linear-gradient(135deg, rgba(5, 150, 105, 0.1), rgba(6, 78, 59, 0.1));
    }
    
    .gradient-border::before {
        content: '';
        position: absolute;
        inset: 0;
        padding: 2px;
        background: linear-gradient(45deg, #059669, #d4af37, #059669, #d4af37);
        background-size: 300% 300%;
        border-radius: inherit;
        mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        mask-composite: xor;
        -webkit-mask-composite: xor;
    }
    
    .faq-accordion {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }
    
    .faq-accordion::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.2), transparent);
    }
    
    .faq-accordion:hover {
        transform: translateX(8px) scale(1.02);
        box-shadow: 0 10px 40px rgba(212, 175, 55, 0.3), 0 0 20px rgba(5, 150, 105, 0.2);
    }
    
    .faq-accordion:hover::after {
        animation-duration: 1.5s;
    }
    
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .faq-accordion.active .faq-answer {
        max-height: 600px;
        transition: max-height 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .faq-icon {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        filter: drop-shadow(0 0 8px currentColor);
    }
    
    .faq-accordion.active .faq-icon {
        transform: rotate(45deg) scale(1.2);
    }
    
    .gold-shimmer {
        background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.4), transparent);
        background-size: 200% 100%;
    }
    
    .text-gradient-gold {
        background: linear-gradient(135deg, #d4af37, #f4e4bc, #d4af37, #b8941f);
        background-size: 200% 200%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: drop-shadow(0 2px 4px rgba(212, 175, 55, 0.3));
    }
    
    .glow-effect {
        box-shadow: 0 0 30px rgba(212, 175, 55, 0.4), 0 0 60px rgba(5, 150, 105, 0.2);
    }
    
    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: radial-gradient(circle, #d4af37, transparent);
        border-radius: 50%;
        animation: particle-float 10s linear infinite;
    }
    
    .hero-glow {
        background: radial-gradient(ellipse at center, rgba(212, 175, 55, 0.15) 0%, transparent 70%);
    }
</style>
@endpush

@section('content')
<!-- Hero Section with Video Background -->
<div class="relative overflow-hidden py-24" style="position: relative;">
    <!-- Video Background -->
    <video 
        class="hero-video" 
        autoplay 
        loop 
        muted 
        playsinline
        preload="auto"
        style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            opacity: 1;
            filter: blur(1px);
        "
        onerror="console.error('Video failed to load'); this.style.display='none';"
        onloadstart="console.log('Video loading started...');"
        oncanplay="console.log('Video can play'); this.play().catch(e => console.error('Autoplay blocked:', e));"
        onloadeddata="console.log('Video data loaded');"
    >
        <source src="{{ asset('assets/abstract-lines-bg.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <!-- Video Overlay for Text Readability -->
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: -1;
    "></div>
    <!-- Floating Particles -->
    <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
    <div class="particle" style="left: 25%; animation-delay: 2s;"></div>
    <div class="particle" style="left: 40%; animation-delay: 4s;"></div>
    <div class="particle" style="left: 60%; animation-delay: 6s;"></div>
    <div class="particle" style="left: 75%; animation-delay: 8s;"></div>
    <div class="particle" style="left: 90%; animation-delay: 1s;"></div>
    
    <!-- Hero Glow Effect -->
    <div class="absolute inset-0 hero-glow"></div>
    
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 border-4 border-halal-gold/30 rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 border-4 border-halal-green/30 rotate-45 animate-float"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 border-4 border-halal-gold/30 rotate-12 animate-pulse-slow"></div>
        <div class="absolute top-1/3 right-1/4 w-28 h-28 border-4 border-halal-green/20 rounded-full animate-float"></div>
    </div>

    <div class="max-w-6xl mx-auto px-8 relative z-10">
        <div class="text-center animate-fade-in-up">
            <div class="inline-flex items-center gap-3 mb-6 px-8 py-4 glass-morphism-dark rounded-full shadow-2xl border-2 border-halal-gold/30 glow-effect">
                <span class="text-4xl animate-float">❓</span>
                <p class="text-sm font-bold tracking-[0.3em] text-white uppercase">International Halal Economic Awards 2026</p>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                <span class="text-gradient-gold">Frequently Asked</span><br>
                <span class="text-white">Questions</span>
            </h1>
            <p class="text-xl md:text-2xl text-white/80 max-w-3xl mx-auto leading-relaxed font-medium">
                Everything you need to know about the International Halal Economic Awards 2026
            </p>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="max-w-6xl mx-auto px-8 py-16">
    <div class="space-y-4">
        
        <!-- Q1 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 0.1s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-gold faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q1: WHO IS ELIGIBLE TO PARTICIPATE?</h3>
                </div>
                <span class="text-halal-green font-bold text-lg gold-shimmer px-3 py-1 rounded-full">01</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 leading-relaxed">
                        Any organization, SME, multinational, startup, cooperatives, government agency, or individual entity engaged in Halal-related activities is eligible.
                    </p>
                </div>
            </div>
        </div>

        <!-- Q2 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 0.2s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-green faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q2: DO I NEED HALAL CERTIFICATION TO ENTER?</h3>
                </div>
                <span class="text-halal-gold font-bold text-lg gold-shimmer px-3 py-1 rounded-full">02</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 leading-relaxed">
                        Only entries involving food, cosmetics, pharmaceuticals, logistics and supply chain require Halal certification, other categories may focus on innovation, strategy, governance, ESG, or contribution.
                    </p>
                </div>
            </div>
        </div>

        <!-- Q3 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 0.3s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-gold faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q3: CAN ONE ORGANIZATION SUBMIT ENTRIES FOR MULTIPLE CATEGORIES?</h3>
                </div>
                <span class="text-halal-green font-bold text-lg gold-shimmer px-3 py-1 rounded-full">03</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 leading-relaxed">
                        Yes. There is no limit on how many categories you may enter.
                    </p>
                </div>
            </div>
        </div>

        <!-- Q4 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 0.4s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-green faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q4: ARE INTERNATIONAL COMPANIES ALLOWED TO PARTICIPATE?</h3>
                </div>
                <span class="text-halal-gold font-bold text-lg gold-shimmer px-3 py-1 rounded-full">04</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 leading-relaxed">
                        Absolutely. The Awards welcome entries from any country and region worldwide.
                    </p>
                </div>
            </div>
        </div>

        <!-- Q5 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 0.5s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-gold faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q5: WILL OUR SUBMISSION BE KEPT CONFIDENTIAL?</h3>
                </div>
                <span class="text-halal-green font-bold text-lg gold-shimmer px-3 py-1 rounded-full">05</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 leading-relaxed">
                        Yes. All entries are handled with strict confidentiality protocols and used solely for judging.
                    </p>
                </div>
            </div>
        </div>

        <!-- Q6 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 0.6s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-green faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q6: WHAT KIND OF EVIDENCE IS REQUIRED?</h3>
                </div>
                <span class="text-halal-gold font-bold text-lg gold-shimmer px-3 py-1 rounded-full">06</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 mb-4 font-medium">Evidence may include:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Certification records
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Performance data
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Audit reports
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Financial outcomes
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Supply chain documentation
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Case studies
                        </div>
                        <div class="flex items-center gap-2 text-gray-300 md:col-span-2">
                            <span class="text-halal-gold font-bold">•</span>
                            Photos, videos, media coverage
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Q7 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 0.7s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-gold faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q7: IF WE WIN, HOW CAN WE USE THE AWARD?</h3>
                </div>
                <span class="text-halal-green font-bold text-lg gold-shimmer px-3 py-1 rounded-full">07</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 mb-4 font-medium">Winners may use:</p>
                    <div class="grid grid-cols-2 gap-3 mb-4">
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-green font-bold">•</span>
                            Winner seal
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-green font-bold">•</span>
                            Trophy visuals
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-green font-bold">•</span>
                            Press recognition
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-green font-bold">•</span>
                            Case features
                        </div>
                    </div>
                    <p class="text-gray-300 mb-3 font-medium">Across:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Packaging
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Marketing
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Digital presence
                        </div>
                        <div class="flex items-center gap-2 text-gray-300">
                            <span class="text-halal-gold font-bold">•</span>
                            Investor decks
                        </div>
                        <div class="flex items-center gap-2 text-gray-300 md:col-span-2">
                            <span class="text-halal-gold font-bold">•</span>
                            Promotional campaigns
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Q8 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 0.8s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-green faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q8: CAN STARTUPS PARTICIPATE?</h3>
                </div>
                <span class="text-halal-gold font-bold text-lg gold-shimmer px-3 py-1 rounded-full">08</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 leading-relaxed">
                        Yes. There are specific categories designed for emerging brands, innovators, and new market entrants.
                    </p>
                </div>
            </div>
        </div>

        <!-- Q9 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 0.9s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-gold faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q9: HOW ARE THE WINNERS ANNOUNCED?</h3>
                </div>
                <span class="text-halal-green font-bold text-lg gold-shimmer px-3 py-1 rounded-full">09</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 leading-relaxed">
                        All winners are revealed during the International Halal Awards Gala Night, held alongside IHEC 2026.
                    </p>
                </div>
            </div>
        </div>

        <!-- Q10 -->
        <div class="faq-accordion glass-morphism-dark gradient-border rounded-2xl shadow-xl overflow-hidden animate-fade-in-up" style="animation-delay: 1.0s;">
            <div class="p-6 cursor-pointer flex items-center justify-between relative z-10" onclick="this.parentElement.classList.toggle('active')">
                <div class="flex items-center gap-4">
                    <span class="text-3xl text-halal-green faq-icon">+</span>
                    <h3 class="text-xl font-bold text-white">Q10: WILL JUDGES PROVIDE FEEDBACK?</h3>
                </div>
                <span class="text-halal-gold font-bold text-lg gold-shimmer px-3 py-1 rounded-full">10</span>
            </div>
            <div class="faq-answer">
                <div class="px-6 pb-6 glass-morphism rounded-b-2xl">
                    <p class="text-gray-300 leading-relaxed">
                        Due to confidentiality, judges do not provide feedback on individual entries.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer Info -->
    <div class="mt-16 text-center">
        <div class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-halal-gold/20 to-halal-green/20 backdrop-blur-sm rounded-full border border-halal-gold/30">
            <span class="text-2xl">🌟</span>
            <p class="text-white font-medium">Have more questions? Contact us at <span class="text-halal-gold font-bold">info@ihec-awards.com</span></p>
        </div>
    </div>
</div>

<script>
    // Add staggered animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-fade-in-up').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
</script>
@endsection

