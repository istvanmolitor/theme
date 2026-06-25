<div id="mobile-menu" class="hidden md:hidden pb-6 animate-fade-in">
    <div class="flex flex-col space-y-3 bg-pink-50/50 p-4 rounded-3xl">
        <ul class="list-none m-0 p-0 space-y-3">
            @foreach (menu('main') as $item)
            @php($children = $item->getMenuItems())
            <li>
                <a href="{{ $item->getUrl() ?? '#' }}" class="{{ $item->isActive() ? 'block rounded-2xl bg-white px-4 py-2 text-pink-500 font-semibold shadow-sm' : 'block rounded-2xl px-4 py-2 text-purple-500 hover:bg-white transition-colors' }}">
                    {{ $item->getLabel() }}
                </a>

                @if (count($children) > 0)
                <ul class="list-none m-0 mt-2 ml-4 space-y-2 border-l border-pink-100 pl-3">
                    @foreach ($children as $child)
                    <li>
                        <a href="{{ $child->getUrl() ?? '#' }}" class="{{ $child->isActive() ? 'block rounded-2xl bg-white px-4 py-2 text-pink-500 font-semibold shadow-sm' : 'block rounded-2xl px-4 py-2 text-purple-500 hover:bg-white transition-colors' }}">
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
