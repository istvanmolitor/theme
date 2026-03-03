<footer class="bg-white text-slate-600 mt-auto border-t border-slate-100">
    {{-- Content Region for custom footer content --}}
    <div class="bg-slate-50 py-4">
        <x-cms-content-region name="footer" />
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            {{-- Brand Section --}}
            <div>
                <h3 class="text-slate-900 text-lg font-bold mb-4">{{ config('app.name', 'Cég Neve') }}</h3>
                <p class="text-sm leading-relaxed max-w-xs mx-auto md:mx-0">
                    Egyszerű és hatékony megoldások mindenki számára. A default téma a megbízhatóságot képviseli.
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-slate-900 text-sm font-bold uppercase tracking-wider mb-4">Linkek</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-slate-900 transition-colors">Főoldal</a></li>
                    <li><a href="/about" class="hover:text-slate-900 transition-colors">Rólunk</a></li>
                    <li><a href="/contact" class="hover:text-slate-900 transition-colors">Kapcsolat</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-slate-900 text-sm font-bold uppercase tracking-wider mb-4">Kapcsolat</h3>
                <p class="text-sm">1000 Budapest, Példa utca 1.</p>
                <p class="text-sm mt-1">info@example.com</p>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-12 pt-8 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center text-xs text-slate-400">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Cég Neve') }}. Minden jog fenntartva.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-slate-600">Facebook</a>
                <a href="#" class="hover:text-slate-600">Instagram</a>
            </div>
        </div>
    </div>
</footer>
