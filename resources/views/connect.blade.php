@extends('layouts.app')

@section('title', 'Connect | Intent Data')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-white overflow-hidden text-center">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10 animate-pulse-glow"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <span class="inline-block py-1 px-3 rounded-full bg-gold-50 border border-gold-100 text-gold-600 text-[0.65rem] font-bold uppercase tracking-widest mb-6">Market Intelligence</span>
            <h1 class="text-4xl md:text-6xl font-display font-bold text-navy-900 mb-6 animate-fade-in-up">
                The Intelligence Engine of <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-600 to-gold-400">Nexus Beacon</span>
            </h1>
            <p class="text-xl text-slate-500 max-w-2xl mx-auto font-light leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s">
                Go beyond firmographics. Connect leverages real-time intent data to identify prospects who are actively researching your solution right now.
            </p>
        </div>
    </section>

    <!-- Stats Highlight -->
    <section class="py-12 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 text-center divide-x divide-slate-100">
                <div>
                    <div class="text-4xl font-display font-bold text-navy-900 mb-2">150M+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">IP Addresses Monitored</div>
                </div>
                <div>
                     <div class="text-4xl font-display font-bold text-navy-900 mb-2">33,000+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Keywords Tracked</div>
                </div>
                <div>
                     <div class="text-4xl font-display font-bold text-navy-900 mb-2">45,000+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Enterprise Websites</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Deep Dive -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-display font-bold text-navy-900 mb-6">Unmatched Coverage, Verified Signals</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Most data providers tell you who fits your profile. We tell you who is ready to buy. Our proprietary algorithm tracks consumption patterns across the global business web to surface high-intent accounts.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-4">
                            <div class="w-6 h-6 rounded-full bg-green-50 flex items-center justify-center text-green-600 text-xs font-bold border border-green-100">✓</div>
                            <span class="text-slate-700 font-medium">Identify Hidden Opportunities</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-6 h-6 rounded-full bg-green-50 flex items-center justify-center text-green-600 text-xs font-bold border border-green-100">✓</div>
                            <span class="text-slate-700 font-medium">Personalize Messaging at Scale</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-6 h-6 rounded-full bg-green-50 flex items-center justify-center text-green-600 text-xs font-bold border border-green-100">✓</div>
                            <span class="text-slate-700 font-medium">Shorten Sales Cycles by 40%</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-slate-100 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gold-400/10 rounded-full blur-2xl -mr-10 -mt-10"></div>
                    <h3 class="text-xl font-bold font-display text-navy-900 mb-2">Get a Free Data Sample</h3>
                    <p class="text-slate-500 text-sm mb-6">See the power of Nexus Beacon data for your industry.</p>
                    
                    <form class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Business Email</label>
                            <input type="email" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:outline-none focus:border-gold-500 transition-colors text-navy-900">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Industry</label>
                            <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:outline-none focus:border-gold-500 transition-colors text-navy-900">
                                <option>Technology</option>
                                <option>Finance</option>
                                <option>Healthcare</option>
                                <option>Manufacturing</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full bg-navy-900 text-white font-bold uppercase tracking-widest text-xs py-4 rounded-lg hover:bg-gold-600 transition-colors shadow-lg">Download Report</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection