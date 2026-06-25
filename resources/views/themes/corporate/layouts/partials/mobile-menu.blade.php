<div id="mobile-menu" class="hidden lg:hidden pb-6 pt-2">
    <div class="flex flex-col space-y-1">
        <nav>
            <ul class="list-none m-0 p-0 space-y-1">
                @foreach (menu('main') as $item)
                @php($children = $item->getMenuItems())
                <li>
                    <a href="{{ $item->getUrl() ?? '#' }}" class="{{ $item->isActive() ? 'block rounded bg-sky-50 px-3 py-2 font-semibold text-sky-700' : 'block rounded px-3 py-2 text-slate-700 hover:bg-slate-50 hover:text-sky-700 transition-colors' }}">
                        {{ $item->getLabel() }}
                    </a>

                    @if (count($children) > 0)
                    <ul class="list-none m-0 mt-1 ml-4 space-y-1 border-l border-slate-200 pl-3">
                        @foreach ($children as $child)
                        <li>
                            <a href="{{ $child->getUrl() ?? '#' }}" class="{{ $child->isActive() ? 'block rounded bg-sky-50 px-3 py-2 font-semibold text-sky-700' : 'block rounded px-3 py-2 text-slate-700 hover:bg-slate-50 hover:text-sky-700 transition-colors' }}">
                                {{ $child->getLabel() }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
