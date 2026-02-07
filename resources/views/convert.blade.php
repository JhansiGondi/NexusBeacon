@extends('layouts.app')

@section('title', 'Convert | Appointments & Revenue')

@section('content')
    <!-- Hero -->
    <section class="relative pt-32 pb-20 bg-white overflow-hidden text-center">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10 animate-pulse-glow"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <span class="inline-block py-1 px-3 rounded-full bg-gold-50 border border-gold-100 text-gold-600 text-[0.65rem] font-bold uppercase tracking-widest mb-6">Pipeline Generation</span>
            <h1 class="text-4xl md:text-6xl font-display font-bold text-navy-900 mb-6 animate-fade-in-up">
                From Prospect to <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-600 to-gold-400">Pipeline</span>
            </h1>
            <p class="text-xl text-slate-500 max-w-2xl mx-auto font-light leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s">
                Your sales team shouldn't be focused on appointment setting. Nexus Beacon Convert delivers qualified, sales-ready meetings directly to their calendars.
            </p>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-12 bg-white border-y border-slate-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-8 text-center divide-x divide-slate-100">
                <div>
                     <div class="text-4xl font-display font-bold text-navy-900 mb-2">25,000+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Appointments Set Annually</div>
                </div>
                <div>
                     <div class="text-4xl font-display font-bold text-navy-900 mb-2">$5B+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pipeline Revenue Generated</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-display font-bold text-navy-900 mb-16 text-center">The Conversion Funnel</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 border border-white bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 group hover-lift relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-navy-100 group-hover:bg-gold-500 transition-colors"></div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Qualification</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        We don't just book meetings; we qualify them. Our team adheres to strict BANT criteria to ensure every prospect is a potential buyer.
                    </p>
                </div>
                
                 <div class="p-8 border border-white bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 group hover-lift relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-navy-100 group-hover:bg-gold-500 transition-colors"></div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Calendar Booking</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Direct calendar integration. Your sales reps wake up to a schedule filled with demos, not admin work.
                    </p>
                </div>
                
                 <div class="p-8 border border-white bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 group hover-lift relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-navy-100 group-hover:bg-gold-500 transition-colors"></div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Handoff & Insight</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        We provide detailed meeting prep notes and call recordings, so your AE steps into the room as an expert.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Satisfaction -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="bg-navy-900 rounded-2xl p-10 text-white relative overflow-hidden shadow-2xl">
                     <div class="absolute top-0 right-0 w-64 h-64 bg-gold-500/10 rounded-full blur-3xl -mr-20 -mt-20"></div>
                     <h3 class="text-2xl font-display font-bold mb-6">Performance Guarantee</h3>
                     <p class="text-slate-300 leading-relaxed mb-8">
                         We are so confident in our process that we offer a performance-based pricing model for qualified enterprises. If we don't book meetings, you don't pay.
                     </p>
                     <a href="{{ route('home') }}#contact" class="inline-block px-8 py-4 bg-gold-500 text-navy-900 font-bold uppercase tracking-widest rounded hover:bg-white transition-colors">Get Details</a>
                </div>
                
                <div>
                     <h2 class="text-3xl font-display font-bold text-navy-900 mb-6">Why Enterprises Trust Nexus Beacon</h2>
                     <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center text-green-600 text-xs font-bold border border-green-100 shrink-0">✓</div>
                            <div>
                                <h4 class="font-bold text-navy-900 text-sm">Zero Ramp Time</h4>
                                <p class="text-slate-500 text-xs mt-1">Our fully trained SDR pods plug into your tech stack in days, not months.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center text-green-600 text-xs font-bold border border-green-100 shrink-0">✓</div>
                            <div>
                                <h4 class="font-bold text-navy-900 text-sm">Vertical Expertise</h4>
                                <p class="text-slate-500 text-xs mt-1">Specialized teams for SaaS, Fintech, Healthcare, and Manufacturing.</p>
                            </div>
                        </li>
                     </ul>
                </div>
            </div>
        </div>
    </section>
@endsection