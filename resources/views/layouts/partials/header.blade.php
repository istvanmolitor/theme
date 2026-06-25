<header class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="text-xl font-semibold tracking-tight text-indigo-600 hover:text-indigo-500 transition-colors">
                    <span class="bg-indigo-600 text-white px-2 py-1 rounded mr-1">M</span>{{ config('app.name', 'Molitor') }}
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <x-theme::template view="layouts.partials.menu" />

            {{-- Search --}}
            <x-theme::template view="layouts.partials.search" />

            {{-- Mobile menu button --}}
            <div class="md:hidden flex items-center">
                <button type="button"
                        class="text-gray-500 hover:text-gray-600 focus:outline-none p-2"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <x-theme::template view="layouts.partials.mobile-menu" />
    </div>

    {{-- Content Region for custom header content --}}
    <div class="bg-gray-50">
        @yield('header')
    </div>
</header>
