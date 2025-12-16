@extends('layouts.app')

@section('title', 'Winner Recognition, FAQs & Prestige Packages')

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
    .islamic-pattern {
        background-image: 
            repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(5, 150, 105, 0.04) 35px, rgba(5, 150, 105, 0.04) 70px),
            repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(212, 175, 55, 0.04) 35px, rgba(212, 175, 55, 0.04) 70px);
    }
    .geometric-border {
        position: relative;
        overflow: hidden;
    }
    .geometric-border::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, #059669, #d4af37, #059669);
        border-radius: inherit;
        z-index: -1;
        animation: geometric-rotate 3s linear infinite;
    }
    .star-pattern {
        background-image: radial-gradient(circle at 20% 50%, rgba(5, 150, 105, 0.06) 0%, transparent 50%),
                          radial-gradient(circle at 80% 80%, rgba(212, 175, 55, 0.06) 0%, transparent 50%);
    }
    .gold-shimmer {
        background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.3), transparent);
        background-size: 200% 100%;
        animation: shimmer-gold 3s infinite;
    }
    .halal-ornament {
        background-image: 
            radial-gradient(circle at 50% 50%, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
    }
</style>
@endpush

@section('content')
<!-- Hero Section with Islamic Geometric Pattern -->
<div class="relative overflow-hidden bg-gradient-to-br from-halal-dark/10 via-halal-green/5 to-halal-gold/10 py-24 islamic-pattern">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 border-4 border-halal-gold/30 rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 border-4 border-halal-green/30 rotate-45 animate-float"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 border-4 border-halal-gold/30 rotate-12 animate-pulse-slow"></div>
        <div class="absolute top-1/3 right-1/4 w-28 h-28 border-4 border-halal-green/20 rounded-full animate-float"></div>
    </div>
    
    <div class="max-w-6xl mx-auto px-8 relative z-10">
        <div class="text-center animate-fade-in-up">
            <div class="inline-flex items-center gap-3 mb-6 px-8 py-4 bg-gradient-to-r from-halal-dark to-halal-green backdrop-blur-sm rounded-full shadow-2xl border-2 border-halal-gold/30">
                <span class="text-4xl animate-float">🌟</span>
                <p class="text-sm font-bold tracking-[0.3em] text-halal-gold uppercase">International Halal Awards 2026</p>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                <span class="bg-gradient-to-r from-halal-gold via-halal-gold-light to-halal-gold bg-clip-text text-transparent drop-shadow-lg">Grand Awards</span><br>
                <span class="text-halal-dark">Winner Recognition & Excellence</span>
            </h1>
            <p class="text-xl md:text-2xl text-halal-dark/80 max-w-3xl mx-auto leading-relaxed font-medium">
                Premium global recognition framework for winners of the International Halal Awards 2026
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-6">
                <div class="px-8 py-5 bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-halal-gold/20 hover:border-halal-gold/50">
                    <p class="text-sm text-halal-dark/70 font-semibold uppercase tracking-wide">Global Exposure</p>
                    <p class="text-4xl font-bold bg-gradient-to-r from-halal-green to-halal-green-dark bg-clip-text text-transparent">150+</p>
                    <p class="text-xs text-halal-dark/60">Media Partners</p>
                </div>
                <div class="px-8 py-5 bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-halal-gold/20 hover:border-halal-gold/50">
                    <p class="text-sm text-halal-dark/70 font-semibold uppercase tracking-wide">Recognition</p>
                    <p class="text-4xl font-bold bg-gradient-to-r from-halal-gold to-halal-gold-dark bg-clip-text text-transparent">Lifetime</p>
                    <p class="text-xs text-halal-dark/60">Hall of Fame</p>
                </div>
                <div class="px-8 py-5 bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-halal-gold/20 hover:border-halal-gold/50">
                    <p class="text-sm text-halal-dark/70 font-semibold uppercase tracking-wide">Reach</p>
                    <p class="text-4xl font-bold bg-gradient-to-r from-halal-green to-halal-green-dark bg-clip-text text-transparent">Global</p>
                    <p class="text-xs text-halal-dark/60">50+ Countries</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto px-8 py-16">

        {{-- Section 1: Winner Recognition & Usage Rights --}}
        <section class="mb-16 animate-fade-in-up star-pattern">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-4 border-halal-gold/30 hover:border-halal-gold/60 transition-all duration-500 transform hover:scale-[1.01]">
                <div class="relative bg-gradient-to-br from-halal-dark via-halal-green to-halal-dark px-10 py-10 text-white overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-halal-gold/10 rounded-full -mr-32 -mt-32"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-halal-gold/10 rounded-full -ml-24 -mb-24"></div>
                    <div class="absolute top-1/2 right-1/3 w-32 h-32 bg-halal-gold/5 rounded-full"></div>
                    <div class="relative z-10">
                        <div class="inline-flex items-center gap-2 mb-4 px-5 py-2 bg-halal-gold/20 backdrop-blur-sm rounded-full border border-halal-gold/30">
                            <span class="text-2xl">🌟</span>
                            <p class="text-xs font-bold tracking-[0.35em] uppercase text-halal-gold">Section 11</p>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold mb-4 text-halal-gold">Winner Recognition &amp; Usage Rights</h2>
                        <p class="text-lg md:text-xl text-white/95 max-w-3xl leading-relaxed">Winners of the International Halal Awards 2026 will receive exceptional global exposure and branding privileges.</p>
                    </div>
                </div>
                <div class="px-10 py-10 space-y-8 bg-gradient-to-b from-white to-halal-green/5">
                <div class="group p-7 rounded-2xl bg-gradient-to-br from-halal-green/10 to-halal-gold/5 hover:from-halal-green/15 transition-all duration-300 border-2 border-halal-gold/30 hover:border-halal-gold/60 hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-halal-gold to-halal-gold-dark rounded-xl flex items-center justify-center text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            🏆
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-halal-dark mb-3 group-hover:text-halal-green transition-colors">A. Awards Trophy &amp; Certificate</h3>
                            <ul class="space-y-2 text-halal-dark/80">
                                <li class="flex items-start gap-2">
                                    <span class="text-halal-gold mt-1 font-bold">✓</span>
                                    <span>A premium, specially designed trophy</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-halal-gold mt-1 font-bold">✓</span>
                                    <span>Official certification of achievement</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group p-7 rounded-2xl bg-gradient-to-br from-halal-gold/10 to-halal-green/5 hover:from-halal-gold/15 transition-all duration-300 border-2 border-halal-green/30 hover:border-halal-green/60 hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-halal-green to-halal-green-dark rounded-xl flex items-center justify-center text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            📱
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-halal-dark mb-3 group-hover:text-halal-green transition-colors">B. Digital &amp; Media Recognition</h3>
                            <p class="text-halal-dark/80 mb-3 font-medium">Winners will be featured across:</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> WIED &amp; IHEC official website</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> Halal Economy Magazine</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> Social media announcements</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> Press releases</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> Partner media platforms</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group p-7 rounded-2xl bg-gradient-to-br from-halal-green/10 to-halal-gold/5 hover:from-halal-green/15 transition-all duration-300 border-2 border-halal-gold/30 hover:border-halal-gold/60 hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-halal-gold to-halal-gold-dark rounded-xl flex items-center justify-center text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            🏅
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-halal-dark mb-3 group-hover:text-halal-green transition-colors">C. Rights to Use the Official Winner Seal</h3>
                            <p class="text-halal-dark/80 mb-3 font-medium">Award recipients may use the International Halal Awards Winner Seal on:</p>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-4">
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-gold font-bold">✓</span> Packaging</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-gold font-bold">✓</span> Websites</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-gold font-bold">✓</span> Advertising</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-gold font-bold">✓</span> Marketing campaigns</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-gold font-bold">✓</span> Investor decks</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-gold font-bold">✓</span> Trade materials</div>
                            </div>
                            <div class="p-4 bg-gradient-to-r from-halal-gold/20 to-halal-green/20 rounded-xl border-l-4 border-halal-gold">
                                <p class="text-sm text-halal-dark/70 mb-1 font-medium">Winning brands may state:</p>
                                <p class="font-bold text-halal-dark text-lg">"WINNER OF THE INTERNATIONAL HALAL AWARDS 2026 – [CATEGORY]"</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group p-7 rounded-2xl bg-gradient-to-br from-halal-gold/10 to-halal-green/5 hover:from-halal-gold/15 transition-all duration-300 border-2 border-halal-green/30 hover:border-halal-green/60 hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-halal-green to-halal-green-dark rounded-xl flex items-center justify-center text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            📚
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-halal-dark mb-3 group-hover:text-halal-green transition-colors">D. Featured Case Listing</h3>
                            <p class="text-halal-dark/80 mb-3 font-medium">Top winners will be showcased in the International Halal Awards Casebook, a global publication distributed to:</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> Ministries &amp; Government Agencies</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> International Buyers</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> Halal Certification Bodies</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> Investors</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-green font-bold">✓</span> Industry Councils</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group p-7 rounded-2xl bg-gradient-to-br from-halal-green/10 to-halal-gold/5 hover:from-halal-green/15 transition-all duration-300 border-2 border-halal-gold/30 hover:border-halal-gold/60 hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-halal-gold to-halal-gold-dark rounded-xl flex items-center justify-center text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            ⭐
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-halal-dark mb-3 group-hover:text-halal-green transition-colors">E. Long-Term Recognition</h3>
                            <p class="text-halal-dark/80 mb-3 font-medium">Winners will remain listed permanently in the:</p>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-gold font-bold">✓</span> International Halal Awards Winners Archive</div>
                                <div class="flex items-center gap-2 text-halal-dark/80"><span class="text-halal-gold font-bold">✓</span> Digital Hall of Fame</div>
                            </div>
                            <div class="mt-4 p-4 bg-gradient-to-r from-halal-gold/20 to-halal-green/20 rounded-xl border-l-4 border-halal-gold">
                                <p class="text-halal-dark/80 font-medium">💫 This ensures sustained visibility well beyond the awards event.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 2: FAQs --}}
        <section class="mb-16 animate-fade-in-up">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-4 border-halal-gold/30 hover:border-halal-gold/60 transition-all duration-500">
                <div class="relative bg-gradient-to-br from-halal-dark via-halal-green to-halal-dark px-10 py-10 text-white overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-halal-gold/10 rounded-full -mr-32 -mt-32"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-halal-gold/10 rounded-full -ml-24 -mb-24"></div>
                    <div class="absolute top-1/2 right-1/3 w-32 h-32 bg-halal-gold/5 rounded-full"></div>
                    <div class="relative z-10">
                        <div class="inline-flex items-center gap-2 mb-4 px-5 py-2 bg-halal-gold/20 backdrop-blur-sm rounded-full border border-halal-gold/30">
                            <span class="text-2xl">❓</span>
                            <p class="text-xs font-bold tracking-[0.35em] uppercase text-halal-gold">Section 12</p>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold text-halal-gold">Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="px-10 py-10 space-y-4 bg-gradient-to-b from-white to-halal-green/5">
                <div class="p-6 rounded-xl bg-gradient-to-r from-halal-green/10 to-transparent border-l-4 border-halal-gold hover:shadow-lg transition-all duration-300">
                    <h3 class="font-bold text-halal-dark mb-2 flex items-center gap-2"><span class="text-halal-gold">Q1:</span> Who is eligible to participate?</h3>
                    <p class="text-halal-dark/80 pl-8">Any organization, SME, multinational, startup, cooperatives, government agency, or individual entity engaged in Halal-related activities is eligible.</p>
                </div>

                <div class="p-6 rounded-xl bg-gradient-to-r from-halal-gold/10 to-transparent border-l-4 border-halal-green hover:shadow-lg transition-all duration-300">
                    <h3 class="font-bold text-halal-dark mb-2 flex items-center gap-2"><span class="text-halal-green">Q2:</span> Do I need Halal certification to enter?</h3>
                    <p class="text-halal-dark/80 pl-8">Only entries involving food, cosmetics, pharmaceuticals, logistics and supply chain require Halal certification. Other categories may focus on innovation, strategy, governance, ESG, or contribution.</p>
                </div>

                <div class="p-6 rounded-xl bg-gradient-to-r from-halal-green/10 to-transparent border-l-4 border-halal-gold hover:shadow-lg transition-all duration-300">
                    <h3 class="font-bold text-halal-dark mb-2 flex items-center gap-2"><span class="text-halal-gold">Q3:</span> Can one organization submit entries for multiple categories?</h3>
                    <p class="text-halal-dark/80 pl-8">Yes. There is no limit on how many categories you may enter.</p>
                </div>

                <div class="p-6 rounded-xl bg-gradient-to-r from-halal-gold/10 to-transparent border-l-4 border-halal-green hover:shadow-lg transition-all duration-300">
                    <h3 class="font-bold text-halal-dark mb-2 flex items-center gap-2"><span class="text-halal-green">Q4:</span> Are international companies allowed to participate?</h3>
                    <p class="text-halal-dark/80 pl-8">Absolutely. The Awards welcome entries from any country and region worldwide.</p>
                </div>

                <div class="p-6 rounded-xl bg-gradient-to-r from-halal-green/10 to-transparent border-l-4 border-halal-gold hover:shadow-lg transition-all duration-300">
                    <h3 class="font-bold text-halal-dark mb-2 flex items-center gap-2"><span class="text-halal-gold">Q5:</span> Will our submission be kept confidential?</h3>
                    <p class="text-halal-dark/80 pl-8">Yes. All entries are handled with strict confidentiality protocols and used solely for judging.</p>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-secondary/5 to-transparent border-l-4 border-secondary hover:shadow-md transition-all duration-300">
                    <h3 class="font-bold text-text-primary mb-2 flex items-center gap-2"><span class="text-secondary">Q6:</span> What kind of evidence is required?</h3>
                    <div class="pl-8">
                        <p class="text-text-secondary mb-2">Evidence may include:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-text-secondary text-sm">
                            <div class="flex items-center gap-2"><span class="text-secondary">✓</span> Certification records</div>
                            <div class="flex items-center gap-2"><span class="text-secondary">✓</span> Performance data</div>
                            <div class="flex items-center gap-2"><span class="text-secondary">✓</span> Audit reports</div>
                            <div class="flex items-center gap-2"><span class="text-secondary">✓</span> Financial outcomes</div>
                            <div class="flex items-center gap-2"><span class="text-secondary">✓</span> Supply chain documentation</div>
                            <div class="flex items-center gap-2"><span class="text-secondary">✓</span> Case studies</div>
                            <div class="flex items-center gap-2"><span class="text-secondary">✓</span> Photos, videos, media coverage</div>
                        </div>
                    </div>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-primary/5 to-transparent border-l-4 border-primary hover:shadow-md transition-all duration-300">
                    <h3 class="font-bold text-text-primary mb-2 flex items-center gap-2"><span class="text-primary">Q7:</span> If we win, how can we use the award?</h3>
                    <div class="pl-8">
                        <p class="text-text-secondary mb-2">Winners may use:</p>
                        <div class="grid grid-cols-2 gap-2 text-text-secondary text-sm mb-3">
                            <div class="flex items-center gap-2"><span class="text-primary">✓</span> Winner seal</div>
                            <div class="flex items-center gap-2"><span class="text-primary">✓</span> Trophy visuals</div>
                            <div class="flex items-center gap-2"><span class="text-primary">✓</span> Press recognition</div>
                            <div class="flex items-center gap-2"><span class="text-primary">✓</span> Case features</div>
                        </div>
                        <p class="text-text-secondary mb-2">Across:</p>
                        <div class="grid grid-cols-2 gap-2 text-text-secondary text-sm">
                            <div class="flex items-center gap-2"><span class="text-primary">✓</span> Packaging</div>
                            <div class="flex items-center gap-2"><span class="text-primary">✓</span> Marketing</div>
                            <div class="flex items-center gap-2"><span class="text-primary">✓</span> Digital presence</div>
                            <div class="flex items-center gap-2"><span class="text-primary">✓</span> Investor decks</div>
                            <div class="flex items-center gap-2"><span class="text-primary">✓</span> Promotional campaigns</div>
                        </div>
                    </div>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-secondary/5 to-transparent border-l-4 border-secondary hover:shadow-md transition-all duration-300">
                    <h3 class="font-bold text-text-primary mb-2 flex items-center gap-2"><span class="text-secondary">Q8:</span> Can startups participate?</h3>
                    <p class="text-text-secondary pl-8">Yes. There are specific categories designed for emerging brands, innovators, and new market entrants.</p>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-primary/5 to-transparent border-l-4 border-primary hover:shadow-md transition-all duration-300">
                    <h3 class="font-bold text-text-primary mb-2 flex items-center gap-2"><span class="text-primary">Q9:</span> How are the winners announced?</h3>
                    <p class="text-text-secondary pl-8">All winners are revealed during the International Halal Awards Gala Night, held alongside IHEC 2026.</p>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-secondary/5 to-transparent border-l-4 border-secondary hover:shadow-md transition-all duration-300">
                    <h3 class="font-bold text-text-primary mb-2 flex items-center gap-2"><span class="text-secondary">Q10:</span> Will judges provide feedback?</h3>
                    <p class="text-text-secondary pl-8">Due to confidentiality, judges do not provide feedback on individual entries.</p>
                </div>
            </div>
        </section>

        {{-- Section 3: Award Participation Fees & Prestige Packages --}}
        <section class="mb-16 animate-fade-in-up">
            <div class="mb-12 text-center">
                <div class="inline-flex items-center gap-2 mb-4 px-5 py-2 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-full">
                    <span class="text-2xl">💰</span>
                    <p class="text-xs font-bold tracking-[0.35em] uppercase text-primary">Section 13</p>
                </div>
                <h2 class="text-3xl md:text-5xl font-bold text-text-primary mb-4">Prestige Packages</h2>
                <p class="text-lg text-text-secondary max-w-3xl mx-auto leading-relaxed">Two exclusive award participation categories designed to elevate recipients to the highest levels of global recognition, leadership positioning, and long-term brand prestige.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Global Halal Excellence Award -->
                <article class="relative group bg-white rounded-3xl shadow-2xl overflow-hidden border-2 border-primary/20 hover:border-primary/50 transition-all duration-500 transform hover:scale-[1.02] flex flex-col">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-transparent rounded-bl-full"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-secondary/10 to-transparent rounded-tr-full"></div>
                    
                    <div class="relative z-10 p-8 pb-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-gradient-to-r from-primary to-secondary rounded-full text-white text-xs font-bold tracking-[0.3em] uppercase shadow-lg">
                                🌟 PREMIUM
                            </div>
                            <div class="text-4xl animate-float">🏆</div>
                        </div>
                        <h3 class="text-2xl font-bold text-text-primary mb-2">Global Halal Excellence Award</h3>
                        <p class="text-sm font-semibold text-text-secondary italic mb-4">"The Highest Honor of the International Halal Awards 2026"</p>
                        
                        <div class="flex items-baseline gap-2 mb-6">
                            <span class="text-5xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">RM 15,000</span>
                        </div>
                        
                        <p class="text-text-secondary leading-relaxed mb-6 pb-6 border-b-2 border-primary/10">Reserved for organizations and leaders who demonstrate extraordinary contributions and breakthrough achievements within the global Halal ecosystem.</p>
                        
                        <h4 class="font-bold text-text-primary mb-4 flex items-center gap-2">
                            <span class="text-primary text-xl">✨</span>
                            Package Benefits
                        </h4>
                        <div class="space-y-3 flex-1">
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-primary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">Award presentation by Honorable Minister</p>
                                    <p class="text-xs text-text-secondary">A rare, prestigious moment receiving the accolade directly from a Malaysian Minister or dignitary.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-primary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">VVIP seating experience</p>
                                    <p class="text-xs text-text-secondary">Placement at the VVIP Table with Ministers, VIP guests, international leaders and high-profile dignitaries.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-primary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">National & international media feature</p>
                                    <p class="text-xs text-text-secondary">Highlighted in national and international media, online news portals, and official social channels.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-primary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">Dedicated gala seating</p>
                                    <p class="text-xs text-text-secondary">One 10-pax Premium Table for family, colleagues, partners or invited guests.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-primary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">Hall of Fame induction (lifetime visibility)</p>
                                    <p class="text-xs text-text-secondary">Permanent listing in the WIED Hall of Fame, IHEC 2026 Hall of Honor and Digital Hall of Fame.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative z-10 px-8 pb-8">
                        <div class="p-4 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-xl text-center">
                            <p class="text-xs text-text-secondary font-semibold uppercase tracking-wider">Evergreen recognition · Searchable visibility · Long-term brand prestige</p>
                        </div>
                    </div>
                </article>

                <!-- Halal Industry Distinction Award -->
                <article class="relative group bg-white rounded-3xl shadow-2xl overflow-hidden border-2 border-secondary/20 hover:border-secondary/50 transition-all duration-500 transform hover:scale-[1.02] flex flex-col">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-secondary/10 to-transparent rounded-bl-full"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-primary/10 to-transparent rounded-tr-full"></div>
                    
                    <div class="relative z-10 p-8 pb-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-gradient-to-r from-secondary to-primary rounded-full text-white text-xs font-bold tracking-[0.3em] uppercase shadow-lg">
                                👑 ELITE
                            </div>
                            <div class="text-4xl animate-float">🎖️</div>
                        </div>
                        <h3 class="text-2xl font-bold text-text-primary mb-2">Halal Industry Distinction Award</h3>
                        <p class="text-sm font-semibold text-text-secondary italic mb-4">"Honoring High-Impact Leaders, Innovators &amp; Emerging Champions"</p>
                        
                        <div class="flex items-baseline gap-2 mb-6">
                            <span class="text-5xl font-bold bg-gradient-to-r from-secondary to-primary bg-clip-text text-transparent">RM 10,000</span>
                        </div>
                        
                        <p class="text-text-secondary leading-relaxed mb-6 pb-6 border-b-2 border-secondary/10">Acknowledges organizations and individuals who demonstrate strong commitment, performance and leadership in advancing Halal industry standards.</p>
                        
                        <h4 class="font-bold text-text-primary mb-4 flex items-center gap-2">
                            <span class="text-secondary text-xl">✨</span>
                            Package Benefits
                        </h4>
                        <div class="space-y-3 flex-1">
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-secondary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-secondary to-primary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">Award presentation by CEO or industry leader</p>
                                    <p class="text-xs text-text-secondary">Honored by respected industry captains, CEOs or distinguished Halal authorities.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-secondary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-secondary to-primary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">VIP seating privileges</p>
                                    <p class="text-xs text-text-secondary">Seating at the VIP Table adjacent to the VVIP area for premium networking access.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-secondary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-secondary to-primary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">National media acknowledgement</p>
                                    <p class="text-xs text-text-secondary">Recognition in major digital media outlets, and official IHEC &amp; WIED social media and awards publicity campaigns.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-secondary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-secondary to-primary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">Exclusive table for your guests</p>
                                    <p class="text-xs text-text-secondary">One 10-pax VIP Table for family members, guests or corporate representatives.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-secondary/5 transition-colors">
                                <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-secondary to-primary rounded-full flex items-center justify-center text-white text-xs font-bold">✓</span>
                                <div>
                                    <p class="font-semibold text-text-primary text-sm">Hall of Fame recognition (long-term exposure)</p>
                                    <p class="text-xs text-text-secondary">Permanent listing in the WIED Hall of Fame, IHEC 2026 Hall of Honor and Digital Hall of Fame.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative z-10 px-8 pb-8">
                        <div class="p-4 bg-gradient-to-r from-secondary/10 to-primary/10 rounded-xl text-center">
                            <p class="text-xs text-text-secondary font-semibold uppercase tracking-wider">Long-term exposure · Strategic positioning · Global Halal credibility</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <div class="mt-16 flex justify-center">
            <a href="{{ route('awards.index') }}" class="group px-8 py-4 rounded-full font-semibold text-white bg-gradient-to-r from-primary to-secondary hover:from-primary-dark hover:to-primary transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 no-underline inline-flex items-center gap-3">
                <span class="text-xl group-hover:-translate-x-1 transition-transform duration-300">←</span>
                <span>Back to Awards Overview</span>
            </a>
        </div>
    </div>
</div>
@endsection
