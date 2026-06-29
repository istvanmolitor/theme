@php
    $searchRoute = collect(['news.search', 'cms.search', 'search'])
        ->first(fn($r) => \Illuminate\Support\Facades\Route::has($r));
    $searchAction = $searchRoute ? route($searchRoute) : '/search';
    $searchQuery = request()->string('search')->value();
@endphp

<form action="{{ $searchAction }}" method="GET" role="search" class="hidden md:flex items-center">
    <div class="relative">
        <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-orange-200 pointer-events-none"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
        <input
            type="search"
            name="search"
            value="{{ $searchQuery }}"
            placeholder="Keresés..."
            aria-label="Keresés"
            class="w-56 pl-9 pr-3 py-1.5 text-sm border border-white/30 rounded-lg bg-white/20 text-white placeholder-orange-200 focus:outline-none focus:ring-2 focus:ring-white/60 focus:border-transparent transition"
        >
    </div>
</form>
