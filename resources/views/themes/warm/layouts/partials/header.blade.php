<header class="bg-orange-600 text-white sticky top-0 z-50 shadow-xl border-b border-orange-700">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center space-x-3 group">
                    <div class="p-2 bg-white/20 rounded-lg group-hover:bg-white/30 transition-all rotate-3 group-hover:rotate-0">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L4.5 20.29L5.21 21L12 18L18.79 21L19.5 20.29L12 2Z" />
                        </svg>
                    </div>
                    <span class="text-2xl font-black italic tracking-tighter uppercase">{{ config('app.name', 'Warm') }}</span>
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex space-x-2">
                @themeInclude('layouts.partials.menu', ['menuName' => $menuName ?? 'main', 'variant' => 'desktop'])
            </nav>

            {{-- Mobile menu button --}}
            <div class="md:hidden">
                <button type="button"
                        class="p-2 rounded-md hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-white"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="hidden md:hidden pb-6 border-t border-orange-500 pt-4">
            <div class="flex flex-col space-y-2">
                @themeInclude('layouts.partials.menu', ['menuName' => $menuName ?? 'main', 'variant' => 'mobile'])
            </div>
        </div>
    </div>

    {{-- Content Region for custom header content --}}
    <div class="bg-orange-700/50 py-1">
        @yield('header')
    </div>
</header>
