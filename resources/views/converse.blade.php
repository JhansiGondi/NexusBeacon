@extends('layouts.app')

@section('title', 'Converse | Outreach & Syndication')

@section('content')
    <!-- Hero -->
    <section class="relative pt-32 pb-20 bg-white overflow-hidden text-center">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10 animate-pulse-glow"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <span class="inline-block py-1 px-3 rounded-full bg-navy-50 border border-navy-100 text-navy-600 text-[0.65rem] font-bold uppercase tracking-widest mb-6">Omnichannel Engagement</span>
            <h1 class="text-4xl md:text-6xl font-display font-bold text-navy-900 mb-6 animate-fade-in-up">
                Spark Conversations That <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-600 to-gold-400">Convert</span>
            </h1>
            <p class="text-xl text-slate-500 max-w-2xl mx-auto font-light leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s">
                Reach the right people with the right message at the right time. Our human-led, AI-enhanced outreach ensures your brand is seen and heard.
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-24 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group">
                    <div class="absolute -inset-4 bg-gradient-to-r from-gold-50 to-slate-50 rounded-2xl transform rotate-2 opacity-50 group-hover:-rotate-1 transition-transform duration-500"></div>
                     <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Outreach Team" class="relative rounded-2xl shadow-xl transform -rotate-1 group-hover:rotate-0 transition-transform duration-500 border border-slate-100">
                </div>
                
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-display font-bold text-navy-900 mb-6">Human Touch at Enterprise Scale</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Automation is powerful, but relationships are built by people. Nexus Beacon Converse combines sophisticated sequencing technology with expert SDRs who know how to navigate complex buying committees.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white shadow-sm border border-slate-100 rounded-lg flex items-center justify-center text-navy-900 font-bold shrink-0">01</div>
                            <div>
                                <h3 class="font-bold text-navy-900 mb-1">Content Syndication</h3>
                                <p class="text-sm text-slate-500">Distribute your whitepapers and case studies to targeted decision-makers.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white shadow-sm border border-slate-100 rounded-lg flex items-center justify-center text-navy-900 font-bold shrink-0">02</div>
                            <div>
                                <h3 class="font-bold text-navy-900 mb-1">Multi-Channel Sequences</h3>
                                <p class="text-sm text-slate-500">Email, LinkedIn, and Phone outreach coordinated for maximum impact.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white shadow-sm border border-slate-100 rounded-lg flex items-center justify-center text-navy-900 font-bold shrink-0">03</div>
                            <div>
                                <h3 class="font-bold text-navy-900 mb-1">Lead Nurturing</h3>
                                <p class="text-sm text-slate-500">Keep prospects engaged until they are ready to buy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-navy-900 mb-8">Ready to Amplitude Your Outreach?</h2>
            <a href="{{ route('home') }}#contact" class="inline-block px-8 py-4 bg-navy-900 text-white font-bold uppercase tracking-widest rounded hover:bg-gold-600 transition-colors shadow-lg">Start Conversation Campaign</a>
        </div>
    </section>
@endsection