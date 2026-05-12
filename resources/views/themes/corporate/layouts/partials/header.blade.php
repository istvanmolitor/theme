<header class="bg-white shadow-lg sticky top-0 z-50">
    {{-- Top bar --}}
    <div class="bg-sky-900 text-white text-xs py-2 hidden sm:block">
        <div class="container mx-auto px-4 flex justify-between">
            <div>{{ date('Y. m. d.') }}</div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-sky-200">Support</a>
                <a href="#" class="hover:text-sky-200">Client Portal</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex justify-between items-center h-20">
            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center space-x-2 group">
                    <div class="w-10 h-10 bg-sky-700 flex items-center justify-center rounded-sm group-hover:bg-sky-600 transition-colors">
                        <span class="text-white font-bold text-xl">C</span>
                    </div>
                    <span class="text-2xl font-bold text-slate-800 tracking-tight uppercase">{{ config('app.name', 'Corporate') }}</span>
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex space-x-1">
                @yield('menu')
            </nav>

            {{-- Mobile menu button --}}
            <div class="lg:hidden">
                <button type="button"
                        class="text-slate-600 hover:text-sky-700 focus:outline-none p-2 border border-slate-200 rounded"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="hidden lg:hidden pb-6 pt-2">
            <div class="flex flex-col space-y-1">
                @yield('menu')
            </div>
        </div>
    </div>

    {{-- Content Region for custom header content --}}
    <div class="border-t border-slate-100">
        @yield('header')
    </div>
</header>
