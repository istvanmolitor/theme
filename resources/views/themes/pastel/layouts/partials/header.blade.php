<header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-pink-50">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center h-20">
            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="/" class="group relative inline-block">
                    <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-pink-400 to-purple-400">
                        {{ config('app.name', 'Pastel') }}
                    </span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-pink-300 transition-all group-hover:w-full"></span>
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex space-x-6 items-center">
                @yield('menu')
            </nav>

            {{-- Mobile menu button --}}
            <div class="md:hidden">
                <button type="button"
                        class="w-10 h-10 flex items-center justify-center rounded-2xl bg-pink-50 text-pink-400 focus:outline-none"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <circle cx="12" cy="12" r="10" stroke-width="2" />
                        <path stroke-linecap="round" stroke-width="2" d="M8 12h8M12 8v8" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="hidden md:hidden pb-6 animate-fade-in">
            <div class="flex flex-col space-y-3 bg-pink-50/50 p-4 rounded-3xl">
                @yield('menu')
            </div>
        </div>
    </div>

    {{-- Content Region for custom header content --}}
    <div class="h-1 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200">
        @yield('header')
    </div>
</header>
