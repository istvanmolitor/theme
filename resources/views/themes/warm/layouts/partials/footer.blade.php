<footer class="bg-orange-700 text-white mt-auto border-t border-orange-800">
    {{-- Content Region for custom footer content --}}
    <div class="bg-orange-800/50 py-4">
        @yield('footer')
    </div>

    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            {{-- Brand Section --}}
            <div class="col-span-1 md:col-span-2">
                <a href="/" class="flex items-center space-x-3 group mb-6">
                    <div class="p-2 bg-white/20 rounded-lg group-hover:bg-white/30 transition-all">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L4.5 20.29L5.21 21L12 18L18.79 21L19.5 20.29L12 2Z" />
                        </svg>
                    </div>
                    <span class="text-3xl font-black italic tracking-tighter uppercase">{{ config('app.name', 'Warm') }}</span>
                </a>
                <p class="text-orange-100 text-sm leading-relaxed max-w-sm">
                    Energia, szenvedély és elkötelezettség. Hozzuk ki a legtöbbet minden projektből a Warm téma melegségével.
                </p>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="text-white text-xl font-black italic uppercase mb-6 tracking-tighter">Linkek</h3>
                @php($footerMenuItems = app(\Molitor\Menu\Services\MenuManager::class)->build('footer')->getMenuItems())
                <ul class="space-y-4 text-sm font-bold uppercase tracking-tight">
                    @foreach ($footerMenuItems as $item)
                        <li>
                            <a href="{{ $item->getUrl() ?? '#' }}" class="hover:underline decoration-white decoration-2 underline-offset-4">
                                {{ $item->getLabel() }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-white text-xl font-black italic uppercase mb-6 tracking-tighter">Írj nekünk!</h3>
                <div class="space-y-4">
                    <a href="mailto:fire@warm.com" class="block bg-white text-orange-700 font-black py-3 px-6 rounded-xl text-center hover:bg-orange-50 transition-colors uppercase tracking-widest text-xs">
                        fire@warm.com
                    </a>
                    <p class="text-xs text-center text-orange-100 font-bold uppercase tracking-widest">
                        +36 70 987 6543
                    </p>
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-16 pt-8 border-t border-orange-600 flex flex-col md:flex-row justify-between items-center text-xs font-black uppercase tracking-[0.2em]">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Warm') }}. Minden jog fenntartva.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:scale-110 transition-transform"><span class="sr-only">Facebook</span>FB</a>
                <a href="#" class="hover:scale-110 transition-transform"><span class="sr-only">Instagram</span>IG</a>
                <a href="#" class="hover:scale-110 transition-transform"><span class="sr-only">Twitter</span>TW</a>
            </div>
        </div>
    </div>
</footer>
