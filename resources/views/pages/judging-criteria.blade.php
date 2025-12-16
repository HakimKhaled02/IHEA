@extends('layouts.app')

@section('title', 'Judging Criteria')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap');
    
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes gradient-shift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    @keyframes subtle-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(212, 175, 55, 0.1); }
        50% { box-shadow: 0 0 30px rgba(212, 175, 55, 0.2); }
    }
    
    body {
        font-family: 'Inter', sans-serif;
    }
    
    .serif-heading {
        font-family: 'Playfair Display', serif;
    }
    
    .grand-section {
        background: linear-gradient(135deg, 
            rgba(5, 150, 105, 0.03) 0%, 
            rgba(6, 78, 59, 0.05) 50%, 
            rgba(5, 150, 105, 0.03) 100%);
        border-left: 4px solid rgba(212, 175, 55, 0.3);
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        position: relative;
    }
    
    .grand-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, 
            transparent 0%, 
            rgba(212, 175, 55, 0.3) 50%, 
            transparent 100%);
    }
    
    .grand-section:hover {
        transform: translateY(-8px);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.1),
            0 0 20px rgba(212, 175, 55, 0.15);
        border-left-color: rgba(212, 175, 55, 0.6);
    }
    
    .section-number {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        font-weight: 900;
        background: linear-gradient(135deg, 
            #d4af37 0%, 
            #f4e4bc 50%, 
            #d4af37 100%);
        background-size: 200% 200%;
        animation: gradient-shift 4s ease infinite;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
        opacity: 0.9;
    }
    
    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.875rem;
        font-weight: 700;
        color: white;
        line-height: 1.2;
        letter-spacing: -0.02em;
    }
    
    .section-subtitle {
        color: rgba(212, 175, 55, 0.8);
        font-weight: 500;
        font-size: 0.875rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }
    
    .content-area {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0.75rem;
        padding: 2rem;
        position: relative;
    }
    
    .content-area::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, 
            rgba(212, 175, 55, 0.02) 0%, 
            transparent 50%, 
            rgba(5, 150, 105, 0.02) 100%);
        border-radius: inherit;
        pointer-events: none;
    }
    
    .list-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
    }
    
    .list-bullet {
        color: rgba(212, 175, 55, 0.8);
        font-weight: 600;
        flex-shrink: 0;
        margin-top: 0.25rem;
    }
    
    .hero-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(3rem, 8vw, 6rem);
        font-weight: 900;
        line-height: 0.9;
        letter-spacing: -0.04em;
    }
    
    .hero-gradient {
        background: linear-gradient(135deg, 
            #d4af37 0%, 
            #f4e4bc 25%, 
            #d4af37 50%, 
            #b8941f 75%, 
            #d4af37 100%);
        background-size: 200% 200%;
        animation: gradient-shift 6s ease infinite;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: drop-shadow(0 2px 4px rgba(212, 175, 55, 0.3));
    }
    
    .hero-subtitle {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.7);
        font-weight: 300;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }
    
    .hero-badge {
        background: linear-gradient(135deg, 
            rgba(212, 175, 55, 0.1) 0%, 
            rgba(212, 175, 55, 0.05) 100%);
        border: 1px solid rgba(212, 175, 55, 0.3);
        padding: 0.75rem 2rem;
        border-radius: 2rem;
        font-size: 0.875rem;
        font-weight: 500;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: rgba(212, 175, 55, 0.9);
        animation: subtle-glow 4s ease-in-out infinite;
    }
    
    .progress-container {
        display: flex;
        height: 40px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        background: rgba(255, 255, 255, 0.05);
    }
    
    .progress-segment {
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 0.9rem;
        transition: transform 0.3s ease;
        position: relative;
    }
    
    .progress-segment:hover {
        transform: scaleY(1.1);
        z-index: 10;
    }
    
    .criteria-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }
    
    .criteria-item {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0.75rem;
        padding: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .criteria-item:hover {
        transform: translateY(-4px);
        border-color: rgba(212, 175, 55, 0.3);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    
    .criteria-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }
    
    .criteria-icon i {
        font-size: 1.5rem;
        color: #d4af37;
    }
    
    .criteria-name {
        color: white;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    .criteria-weight {
        color: rgba(212, 175, 55, 0.8);
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    .footer-grand {
        background: linear-gradient(135deg, 
            rgba(212, 175, 55, 0.05) 0%, 
            rgba(5, 150, 105, 0.05) 100%);
        border: 1px solid rgba(212, 175, 55, 0.2);
        padding: 2rem 3rem;
        border-radius: 2rem;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .criteria-list li {
        font-size: 0.95rem;
    }
}

/* AOS Animation Overrides */
[data-aos] {
    pointer-events: none;
}

[data-aos].aos-animate {
    pointer-events: auto;
}
</style>

<!-- AOS Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
</script>
@endsection

