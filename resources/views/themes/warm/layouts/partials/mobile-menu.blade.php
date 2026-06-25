<div id="mobile-menu" class="hidden md:hidden pb-6 border-t border-orange-500 pt-4">
    <div class="flex flex-col space-y-2">
        <ul class="list-none m-0 p-0 space-y-2">
            @foreach (menu('main') as $item)
            @php($children = $item->getMenuItems())
            <li>
                <a href="{{ $item->getUrl() ?? '#' }}" class="{{ $item->isActive() ? 'block rounded-md bg-white/20 px-3 py-2 font-semibold text-white' : 'block rounded-md px-3 py-2 text-orange-100 hover:bg-white/10 hover:text-white transition-colors' }}">
                    {{ $item->getLabel() }}
                </a>

                @if (count($children) > 0)
                <ul class="list-none m-0 mt-2 ml-4 space-y-2 border-l border-orange-400 pl-3">
                    @foreach ($children as $child)
                    <li>
                        <a href="{{ $child->getUrl() ?? '#' }}" class="{{ $child->isActive() ? 'block rounded-md bg-white/20 px-3 py-2 font-semibold text-white' : 'block rounded-md px-3 py-2 text-orange-100 hover:bg-white/10 hover:text-white transition-colors' }}">
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
