<footer class="bg-pink-50/50 mt-auto border-t border-pink-100">
    {{-- Content Region for custom footer content --}}
    <div class="h-1 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200"></div>
    <div class="py-4">
        @yield('footer')
    </div>

    <div class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            {{-- Brand Section --}}
            <div class="col-span-1 md:col-span-2">
                <a href="/" class="group relative inline-block mb-6">
                    <span class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-pink-400 to-purple-400">
                        {{ config('app.name', 'Pastel') }}
                    </span>
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-pink-300"></span>
                </a>
                <p class="text-purple-400/80 text-sm leading-relaxed max-w-sm">
                    Varázsoljuk színessé és lággyá a digitális élményeket. Kreativitás, finomság és modern megközelítés minden pixelben.
                </p>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="text-purple-500 font-bold text-sm uppercase tracking-widest mb-6 px-3 border-l-2 border-pink-300">Menü</h3>
                @php($footerMenuItems = app(\Molitor\Menu\Services\MenuManager::class)->build('footer')->getMenuItems())
                <ul class="space-y-4 text-sm font-medium text-purple-400">
                    @foreach ($footerMenuItems as $item)
                        <li>
                            <a href="{{ $item->getUrl() ?? '#' }}" class="hover:text-pink-400 transition-colors bg-white/50 px-3 py-1.5 rounded-full inline-block">
                                {{ $item->getLabel() }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-purple-500 font-bold text-sm uppercase tracking-widest mb-6 px-3 border-l-2 border-pink-300">Elérhetőség</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 text-purple-400">
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-pink-300 shadow-sm">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                        <span class="text-sm">hello@pastel.design</span>
                    </div>
                    <div class="flex items-center space-x-3 text-purple-400">
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-pink-300 shadow-sm">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <span class="text-sm">Felhő utca 7, Budapest</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-16 pt-8 border-t border-pink-100 flex flex-col md:flex-row justify-between items-center text-xs font-semibold text-purple-300 uppercase tracking-widest">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Pastel') }}. Készült szeretettel.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="w-10 h-10 rounded-2xl bg-white flex items-center justify-center hover:bg-pink-100 transition-colors shadow-sm"><span class="sr-only">Instagram</span>✨</a>
                <a href="#" class="w-10 h-10 rounded-2xl bg-white flex items-center justify-center hover:bg-pink-100 transition-colors shadow-sm"><span class="sr-only">Pinterest</span>🎨</a>
                <a href="#" class="w-10 h-10 rounded-2xl bg-white flex items-center justify-center hover:bg-pink-100 transition-colors shadow-sm"><span class="sr-only">Dribbble</span>🏀</a>
            </div>
        </div>
    </div>
</footer>
