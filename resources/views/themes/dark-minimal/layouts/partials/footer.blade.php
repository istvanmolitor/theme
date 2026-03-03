<footer class="bg-slate-950 text-slate-400 mt-auto border-t border-slate-900">
    {{-- Content Region for custom footer content --}}
    <div class="bg-slate-900/30">
        <x-cms-content-region name="footer" />
    </div>

    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            {{-- Brand Section --}}
            <div class="col-span-1 md:col-span-2">
                <a href="/" class="text-xl font-light tracking-widest uppercase text-white mb-6 inline-block">
                    {{ config('app.name', 'M') }}
                </a>
                <p class="text-sm font-light leading-relaxed max-w-sm">
                    Letisztult megoldások a digitális térben. Minimalista esztétika, maximális funkcionalitás.
                </p>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="text-white text-xs font-medium uppercase tracking-widest mb-6">Navigáció</h3>
                <ul class="space-y-4 text-xs tracking-wide">
                    <li><a href="/" class="hover:text-white transition-colors">Kezdőlap</a></li>
                    <li><a href="/projects" class="hover:text-white transition-colors">Projektek</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors">Rólunk</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors">Kapcsolat</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-white text-xs font-medium uppercase tracking-widest mb-6">Kapcsolat</h3>
                <ul class="space-y-4 text-xs tracking-wide">
                    <li><a href="mailto:hello@example.com" class="hover:text-white transition-colors uppercase">hello@example.com</a></li>
                    <li><span class="block uppercase tracking-tighter">+36 30 123 4567</span></li>
                    <li><span class="block">1000 Budapest, Példa utca 1.</span></li>
                </ul>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-16 pt-8 border-t border-slate-900 flex flex-col md:flex-row justify-between items-center text-[10px] uppercase tracking-[0.2em]">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'M') }}. Minden jog fenntartva.</p>
            <div class="flex space-x-8 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">Instagram</a>
                <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                <a href="#" class="hover:text-white transition-colors">Behance</a>
            </div>
        </div>
    </div>
</footer>
