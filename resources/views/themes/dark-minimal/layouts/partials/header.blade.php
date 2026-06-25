<header class="bg-slate-950 text-slate-200 sticky top-0 z-50 border-b border-slate-800">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-light tracking-widest uppercase hover:text-white transition-colors">
                    {{ config('app.name', 'M') }}
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <x-theme::template view="layouts.partials.menu" />

            {{-- Search --}}
            <x-theme::template view="layouts.partials.search" />

            {{-- Mobile menu button --}}
            <div class="md:hidden">
                <button type="button"
                        class="text-slate-400 hover:text-white focus:outline-none"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 8h16M4 16h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <x-theme::template view="layouts.partials.mobile-menu" />
    </div>

    {{-- Content Region for custom header content --}}
    <div class="bg-slate-900/50 backdrop-blur-sm">
        @yield('header')
    </div>
</header>
