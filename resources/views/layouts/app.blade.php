<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nexus Beacon | Illuminating Enterprise Growth')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        [x-cloak] { display: none !important; }
        .glass-nav {
            background: rgba(10, 25, 47, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(212, 175, 55, 0.1);
        }
        /* Custom Animations */
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        
        @keyframes scale-in {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-scale-in {
            animation: scale-in 0.6s ease-out forwards;
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="antialiased text-slate-600 bg-white selection:bg-gold-500 selection:text-white font-sans" x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">

    <!-- Navbar -->
    <nav :class="{ 'py-4 shadow-sm': !scrolled, 'py-3 shadow-md': scrolled }" class="fixed w-full top-0 z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center group cursor-pointer hover:opacity-80 transition-opacity">
                    <a href="/" class="flex items-center gap-3">
                        <div class="relative h-10 w-10 flex items-center justify-center bg-white/10 border border-gold-500/50 rounded-full backdrop-blur-sm">
                             <span class="text-gold-500 font-display font-bold text-xl">N</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-display font-bold text-xl tracking-wide text-white">NEXUS<span class="text-gold-500">BEACON</span></span>
                            <span class="text-[0.6rem] uppercase tracking-[0.2em] text-slate-400">Illuminating Growth</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-sm font-bold tracking-wide hover:text-gold-400 transition-colors {{ request()->routeIs('home') ? 'text-gold-400' : 'text-slate-300' }}">HOME</a>
                    <a href="{{ route('about') }}" class="text-sm font-medium tracking-wide text-slate-400 hover:text-gold-400 transition-colors {{ request()->routeIs('about') ? 'text-gold-400' : '' }}">ABOUT</a>
                    
                    <div class="relative group" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false" @mouseenter="open = true" class="text-sm font-medium tracking-wide text-slate-400 hover:text-gold-400 transition-colors flex items-center gap-1">
                            SOLUTIONS
                            <svg class="h-3 w-3 transition-transform duration-200 group-hover:rotate-180 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        
                        <!-- Dropdown -->
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             class="absolute left-1/2 -translate-x-1/2 mt-4 w-72 bg-navy-800 rounded-lg shadow-xl py-2 border border-slate-700 overflow-hidden ring-1 ring-black/5" x-cloak>
                             
                            <a href="{{ route('connect') }}" class="block px-6 py-4 hover:bg-navy-700 flex items-start gap-4 group/item transition-colors border-b border-white/5 last:border-0">
                                <div class="mt-1 text-gold-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-white group-hover/item:text-gold-400 font-display tracking-wide">CONNECT</p>
                                    <p class="text-xs text-slate-400 mt-0.5">Intent Data & Intelligence</p>
                                </div>
                            </a>
                            
                            <a href="{{ route('converse') }}" class="block px-6 py-4 hover:bg-navy-700 flex items-start gap-4 group/item transition-colors border-b border-white/5 last:border-0">
                                <div class="mt-1 text-gold-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-white group-hover/item:text-gold-400 font-display tracking-wide">CONVERSE</p>
                                    <p class="text-xs text-slate-400 mt-0.5">Syndication & Outreach</p>
                                </div>
                            </a>
                            
                            <a href="{{ route('convert') }}" class="block px-6 py-4 hover:bg-navy-700 flex items-start gap-4 group/item transition-colors border-b border-white/5 last:border-0">
                                <div class="mt-1 text-gold-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-white group-hover/item:text-gold-400 font-display tracking-wide">CONVERT</p>
                                    <p class="text-xs text-slate-400 mt-0.5">Appointments & Closing</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <a href="{{ route('blog') }}" class="text-sm font-medium tracking-wide text-slate-400 hover:text-gold-400 transition-colors {{ request()->routeIs('blog') ? 'text-gold-400' : '' }}">BLOG</a>
                    <a href="{{ route('careers') }}" class="text-sm font-medium tracking-wide text-slate-400 hover:text-gold-400 transition-colors {{ request()->routeIs('careers') ? 'text-gold-400' : '' }}">CAREERS</a>
                </div>

                <!-- CTA -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="{{ request()->routeIs('home') ? '#contact' : route('home').'#contact' }}" class="relative group overflow-hidden px-6 py-2.5 bg-gold-500 border border-gold-500 text-navy-900 font-bold tracking-wider text-xs uppercase hover:bg-white hover:border-white transition-all duration-300 rounded shadow-sm hover:shadow-md hover:scale-105 transform">
                        <span class="relative z-10">Get Proposal</span>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white p-2 hover:bg-white/10 rounded transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" x-cloak />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden bg-navy-900 border-b border-white/10 shadow-xl absolute w-full left-0 z-40" x-cloak>
            <div class="px-6 py-8 space-y-4">
                <a href="{{ route('home') }}" class="block text-lg font-medium text-white hover:text-gold-500 tracking-wide border-b border-white/10 pb-2">HOME</a>
                <a href="{{ route('about') }}" class="block text-lg font-medium text-white hover:text-gold-500 tracking-wide border-b border-white/10 pb-2">ABOUT</a>
                
                <div class="text-xs font-bold text-slate-400 uppercase tracking-widest pt-2">Solutions</div>
                <div class="pl-4 space-y-3 border-l-2 border-gold-500/20">
                    <a href="{{ route('connect') }}" class="block text-base text-slate-300 hover:text-white">Connect</a>
                    <a href="{{ route('converse') }}" class="block text-base text-slate-300 hover:text-white">Converse</a>
                    <a href="{{ route('convert') }}" class="block text-base text-slate-300 hover:text-white">Convert</a>
                </div>
                
                <a href="{{ route('blog') }}" class="block text-lg font-medium text-white hover:text-gold-500 tracking-wide border-b border-white/10 pb-2 pt-2">BLOG</a>
                <a href="{{ route('careers') }}" class="block text-lg font-medium text-white hover:text-gold-500 tracking-wide border-b border-white/10 pb-2">CAREERS</a>
                
                <div class="pt-6">
                    <a href="{{ request()->routeIs('home') ? '#contact' : route('home').'#contact' }}" class="block w-full text-center bg-gold-500 text-navy-900 font-bold uppercase tracking-widest text-sm py-4 hover:bg-white transition-colors shadow-lg">Get Proposal</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-navy-900 text-slate-300 py-20 border-t border-gold-500/20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-4 gap-12 lg:gap-16 mb-16">
                <!-- Branding -->
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                         <span class="text-2xl font-display font-bold text-white tracking-wide">NEXUS<span class="text-gold-500">BEACON</span></span>
                    </div>
                    <p class="text-sm leading-7 mb-8 text-slate-400">
                        We blend proprietary intent data with human intelligence to deliver enterprise opportunities that convert. The gold standard in demand generation.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="h-10 w-10 rounded-full border border-slate-700 flex items-center justify-center text-slate-400 hover:border-gold-500 hover:text-gold-500 transition-all duration-300 hover:-translate-y-1">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <!-- Add other social links -->
                    </div>
                </div>
                
                <!-- Links -->
                <div>
                    <h4 class="text-white font-bold font-display tracking-widest text-sm uppercase mb-8 border-b border-gold-500/30 pb-2 inline-block">Solutions</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="{{ route('connect') }}" class="hover:text-gold-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 bg-gold-500 rounded-full"></span>Connect</a></li>
                        <li><a href="{{ route('converse') }}" class="hover:text-gold-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 bg-gold-500 rounded-full"></span>Converse</a></li>
                        <li><a href="{{ route('convert') }}" class="hover:text-gold-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 bg-gold-500 rounded-full"></span>Convert</a></li>
                    </ul>
                </div>
                
                <!-- Company -->
                <div>
                    <h4 class="text-white font-bold font-display tracking-widest text-sm uppercase mb-8 border-b border-gold-500/30 pb-2 inline-block">Company</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="{{ route('about') }}" class="hover:text-gold-400 transition-colors">About Us</a></li>
                        <li><a href="{{ route('careers') }}" class="hover:text-gold-400 transition-colors">Careers</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-gold-400 transition-colors">Blog</a></li>
                        <li><a href="{{ route('home') }}#contact" class="hover:text-gold-400 transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h4 class="text-white font-bold font-display tracking-widest text-sm uppercase mb-8 border-b border-gold-500/30 pb-2 inline-block">Intelligence</h4>
                    <p class="text-sm mb-6 text-slate-400">Subscribe for weekly enterprise growth insights.</p>
                    <form class="space-y-3">
                        <input type="email" placeholder="Business Email" class="w-full bg-navy-800 border border-slate-700 rounded p-3 text-white placeholder-slate-500 focus:outline-none focus:border-gold-500 transition-colors text-sm">
                        <button class="w-full bg-gold-500 text-navy-900 font-bold uppercase tracking-wider text-xs py-3 hover:bg-white transition-colors">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} Nexus Beacon. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @if(session('success'))
        <div x-data="{ show: true }" 
             x-init="setTimeout(() => show = false, 5000)" 
             x-show="show" 
             class="fixed bottom-5 right-5 z-50 bg-white border border-green-500 text-navy-900 p-6 rounded-lg shadow-xl flex items-start gap-4 max-w-sm animate-fade-in-up" 
             role="alert">
            <div class="text-green-500 mt-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <h4 class="font-bold font-display text-navy-900 mb-1">Success!</h4>
                <p class="text-sm text-slate-600">{{ session('success') }}</p>
            </div>
             <button @click="show = false" class="text-slate-400 hover:text-navy-900 transition-colors ml-auto">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    @endif
</body>
</html>
