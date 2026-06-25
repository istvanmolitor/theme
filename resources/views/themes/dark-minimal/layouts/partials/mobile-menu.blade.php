<div id="mobile-menu" class="hidden md:hidden pb-8 border-t border-slate-900 pt-4">
    <div class="flex flex-col space-y-4">
        <ul class="list-none m-0 p-0 space-y-4">
            @foreach (menu('main') as $item)
            @php($children = $item->getMenuItems())
            <li>
                <a href="{{ $item->getUrl() ?? '#' }}" class="{{ $item->isActive() ? 'block text-white font-light tracking-widest uppercase border-l-2 border-white pl-3' : 'block text-slate-400 hover:text-white transition-colors uppercase tracking-widest' }}">
                    {{ $item->getLabel() }}
                </a>

                @if (count($children) > 0)
                <ul class="list-none m-0 mt-2 ml-4 space-y-2 border-l border-slate-700 pl-3">
                    @foreach ($children as $child)
                    <li>
                        <a href="{{ $child->getUrl() ?? '#' }}" class="{{ $child->isActive() ? 'block text-white uppercase tracking-widest' : 'block text-slate-500 hover:text-white transition-colors uppercase tracking-widest' }}">
                            {{ $child->getLabel() }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</div>
