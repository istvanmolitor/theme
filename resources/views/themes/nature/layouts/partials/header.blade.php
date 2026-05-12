<header class="bg-emerald-50 sticky top-0 z-50 border-b border-emerald-100">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-24">
            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="/" class="flex flex-col items-center">
                    <span class="text-3xl font-serif text-emerald-800 tracking-wide leading-none">
                         {{ config('app.name', 'Nature') }}
                    </span>
                    <div class="w-12 h-1 bg-emerald-500 rounded-full mt-1"></div>
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex space-x-10">
                @themeInclude('layouts.partials.menu', ['menuName' => $menuName ?? 'main', 'variant' => 'desktop'])
            </nav>

            {{-- Mobile menu button --}}
            <div class="md:hidden">
                <button type="button"
                        class="text-emerald-900 hover:bg-emerald-100 focus:outline-none p-3 rounded-full transition-all"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="hidden md:hidden pb-10 pt-4 bg-emerald-50 rounded-b-3xl">
            <div class="flex flex-col space-y-4 px-4 text-center">
                @themeInclude('layouts.partials.menu', ['menuName' => $menuName ?? 'main', 'variant' => 'mobile'])
            </div>
        </div>
    </div>

    {{-- Content Region for custom header content --}}
    <div class="bg-gradient-to-b from-emerald-50 to-transparent">
        @yield('header')
    </div>
</header>
