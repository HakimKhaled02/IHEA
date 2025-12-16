@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="page-content">
    <h1>Contact Us</h1>
    
    <p>For inquiries about the International Halal Economic Awards 2026, please contact us:</p>
    
    <div class="contact-info">
        <h2>Get in Touch</h2>
        <p>We're here to help answer any questions you may have about the awards program.</p>
        
        <div class="contact-details">
            <div class="contact-item">
                <i class="fas fa-phone-alt contact-icon"></i>
                <div class="contact-text">
                    <h3>Phone / WhatsApp</h3>
                    <a href="https://wa.me/601155549299?text=I%20would%20like%20to%20know%20more%20info%20on%20how%20to%20join%20this%20IHEA%202026." class="contact-link whatsapp-link" target="_blank">
                        <i class="fab fa-whatsapp"></i> +60 11-5554 9299
                    </a>
                </div>
            </div>
            
            <div class="contact-item">
                <i class="fas fa-envelope contact-icon"></i>
                <div class="contact-text">
                    <h3>Email</h3>
                    <a href="mailto:ihec@islamic-economy.org" class="contact-link">
                        ihec@islamic-economy.org
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .page-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            margin-top: 4rem;
        }
        
        .contact-details {
            margin-top: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-2px);
        }
        
        .contact-icon {
            font-size: 1.5rem;
            color: var(--halal-gold, #d4af37);
            width: 40px;
            text-align: center;
        }
        
        .contact-text h3 {
            margin: 0 0 0.5rem 0;
            font-size: 1.1rem;
            color: #ffffff;
        }
        
        .contact-link {
            color: var(--halal-gold, #d4af37);
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .contact-link:hover {
            color: #f4e4bc;
            text-decoration: underline;
            transform: scale(1.05);
        }
        
        .whatsapp-link {
            background: rgba(37, 211, 102, 0.1);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            border: 1px solid rgba(37, 211, 102, 0.3);
        }
        
        .whatsapp-link:hover {
            background: rgba(37, 211, 102, 0.2);
            border-color: rgba(37, 211, 102, 0.5);
            box-shadow: 0 2px 8px rgba(37, 211, 102, 0.3);
        }
        
        .whatsapp-link i {
            font-size: 1.2rem;
        }
    </style>
</div>
@endsection

