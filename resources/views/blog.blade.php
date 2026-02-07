@extends('layouts.app')

@section('title', 'Insights | Nexus Beacon Blog')

@section('content')
    <!-- Header -->
    <section class="relative pt-32 pb-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center pt-10">
            <span class="text-gold-500 font-bold uppercase tracking-widest text-xs mb-4 block">Market Intelligence</span>
            <h1 class="text-4xl md:text-6xl font-display font-bold text-navy-900 mb-6">Nexus Beacon Insights</h1>
            <p class="text-xl text-slate-500 max-w-2xl mx-auto font-light leading-relaxed">
                Strategies, trends, and data for the modern enterprise revenue leader.
            </p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Article 1 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 group hover-lift flex flex-col h-full border border-slate-100">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Analytics" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[0.6rem] font-bold uppercase tracking-widest text-navy-900 border border-slate-100">Strategy</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-xl font-bold font-display text-navy-900 mb-4 group-hover:text-gold-600 transition-colors leading-tight">The Death of Spray and Pray: Why Intent Matters</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow">
                            Stop wasting SDR time on cold prospects. Learn how to identify buying signals before your competitors do.
                        </p>
                        <div class="flex items-center justify-between border-t border-slate-50 pt-6 mt-auto">
                            <span class="text-xs text-slate-400 font-medium">Feb 8, 2026</span>
                            <span class="text-gold-500 font-bold text-xs uppercase tracking-wider group-hover:underline">Read Article</span>
                        </div>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 group hover-lift flex flex-col h-full border border-slate-100">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Meeting" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[0.6rem] font-bold uppercase tracking-widest text-navy-900 border border-slate-100">Sales</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-xl font-bold font-display text-navy-900 mb-4 group-hover:text-gold-600 transition-colors leading-tight">Closing the Enterprise Deal: A Playbook</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow">
                            Enterprise sales cycles are long and complex. Here are the 5 stages of closing a Fortune 500 deal.
                        </p>
                        <div class="flex items-center justify-between border-t border-slate-50 pt-6 mt-auto">
                            <span class="text-xs text-slate-400 font-medium">Jan 24, 2026</span>
                            <span class="text-gold-500 font-bold text-xs uppercase tracking-wider group-hover:underline">Read Article</span>
                        </div>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 group hover-lift flex flex-col h-full border border-slate-100">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Charts" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[0.6rem] font-bold uppercase tracking-widest text-navy-900 border border-slate-100">Data Science</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-xl font-bold font-display text-navy-900 mb-4 group-hover:text-gold-600 transition-colors leading-tight">Inside the Nexus Beacon Engine</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow">
                            How we process 5 billion daily signals to find your next customer. A technical deep dive.
                        </p>
                        <div class="flex items-center justify-between border-t border-slate-50 pt-6 mt-auto">
                            <span class="text-xs text-slate-400 font-medium">Jan 10, 2026</span>
                            <span class="text-gold-500 font-bold text-xs uppercase tracking-wider group-hover:underline">Read Article</span>
                        </div>
                    </div>
                </article>
            </div>
            
            <div class="mt-16 text-center">
                <button class="px-8 py-4 bg-white border border-slate-200 text-navy-900 font-bold uppercase tracking-widest text-xs rounded hover:bg-navy-900 hover:text-white transition-all shadow-sm hover:shadow-lg">Load More Articles</button>
            </div>
        </div>
    </section>
@endsection
