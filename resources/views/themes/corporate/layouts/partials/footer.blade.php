<footer class="bg-slate-900 text-slate-300 mt-auto">
    {{-- Top accent bar --}}
    <div class="h-1 bg-sky-700"></div>

    {{-- Content Region for custom footer content --}}
    <div class="bg-slate-800/50 py-4 border-b border-slate-800">
        <x-cms-content-region name="footer" />
    </div>

    <div class="container mx-auto px-4 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            {{-- Brand Section --}}
            <div class="col-span-1 md:col-span-2">
                <a href="/" class="flex items-center space-x-2 group mb-6">
                    <div class="w-10 h-10 bg-sky-700 flex items-center justify-center rounded-sm group-hover:bg-sky-600 transition-colors">
                        <span class="text-white font-bold text-xl">C</span>
                    </div>
                    <span class="text-2xl font-bold text-white tracking-tight uppercase">{{ config('app.name', 'Corporate') }}</span>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed max-w-md">
                    Megbízható üzleti megoldások és professzionális szolgáltatások partnereink számára. Világszínvonalú szakértelem, helyi elkötelezettség.
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-white text-sm font-bold uppercase tracking-widest mb-6 border-b border-sky-700 pb-2 inline-block">Szolgáltatások</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="/solutions" class="hover:text-sky-400 transition-colors">Üzleti megoldások</a></li>
                    <li><a href="/consulting" class="hover:text-sky-400 transition-colors">Tanácsadás</a></li>
                    <li><a href="/careers" class="hover:text-sky-400 transition-colors">Karrier</a></li>
                    <li><a href="/privacy" class="hover:text-sky-400 transition-colors">Adatvédelem</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-white text-sm font-bold uppercase tracking-widest mb-6 border-b border-sky-700 pb-2 inline-block">Kapcsolat</h3>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li class="flex items-start">
                        <span class="text-sky-500 mr-2 font-bold">A:</span>
                        1000 Budapest, Üzletközpont tér 1.
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-500 mr-2 font-bold">T:</span>
                        +36 1 234 5678
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-500 mr-2 font-bold">E:</span>
                        <a href="mailto:office@corporate.com" class="hover:text-sky-400 transition-colors">office@corporate.com</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Copyright Bar --}}
        <div class="mt-16 pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500 uppercase tracking-widest font-medium">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Corporate') }}. Minden jog fenntartva.</p>
            <div class="flex space-x-8 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                <a href="#" class="hover:text-white transition-colors">Twitter</a>
                <a href="#" class="hover:text-white transition-colors">Facebook</a>
            </div>
        </div>
    </div>
</footer>
