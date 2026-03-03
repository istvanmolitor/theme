<footer class="bg-emerald-950 text-emerald-100 mt-auto border-t border-emerald-900">
    {{-- Content Region for custom footer content --}}
    <div class="bg-emerald-900/20 py-4">
        <x-cms-content-region name="footer" />
    </div>

    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            {{-- Brand Section --}}
            <div class="col-span-1 md:col-span-2">
                <a href="/" class="flex flex-col items-start mb-6">
                    <span class="text-3xl font-serif text-white tracking-wide leading-none">
                         {{ config('app.name', 'Nature') }}
                    </span>
                    <div class="w-12 h-1 bg-emerald-500 rounded-full mt-1"></div>
                </a>
                <p class="text-emerald-200/70 text-sm italic font-serif leading-relaxed max-w-sm">
                    Harmóniában a természettel, tisztelve a környezetet minden megoldásunkkal. Fenntartható fejlődés a digitális világban is.
                </p>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="text-emerald-400 font-serif italic text-lg mb-6">Felfedezés</h3>
                <ul class="space-y-4 text-sm tracking-wide">
                    <li><a href="/" class="hover:text-white transition-colors flex items-center"><span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-2"></span>Kezdőlap</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors flex items-center"><span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-2"></span>Rólunk</a></li>
                    <li><a href="/services" class="hover:text-white transition-colors flex items-center"><span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-2"></span>Szolgáltatások</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors flex items-center"><span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-2"></span>Kapcsolat</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-emerald-400 font-serif italic text-lg mb-6">Kapcsolat</h3>
                <ul class="space-y-4 text-sm tracking-wide">
                    <li><a href="mailto:info@nature.hu" class="hover:text-white transition-colors flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>info@nature.hu</a></li>
                    <li><span class="flex items-center italic tracking-wider"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>+36 30 123 4567</span></li>
                    <li><span class="flex items-center italic tracking-wider"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>1000 Budapest, Park utca 12.</span></li>
                </ul>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-16 pt-8 border-t border-emerald-900/50 flex flex-col md:flex-row justify-between items-center text-[11px] font-serif uppercase tracking-widest text-emerald-400">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Nature') }}. Minden jog fenntartva.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">Facebook</a>
                <a href="#" class="hover:text-white transition-colors">Instagram</a>
                <a href="#" class="hover:text-white transition-colors">Pinterest</a>
            </div>
        </div>
    </div>
</footer>
