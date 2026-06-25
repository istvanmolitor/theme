<div id="mobile-menu" class="hidden md:hidden pb-10 pt-4 bg-emerald-50 rounded-b-3xl">
    <div class="flex flex-col space-y-4 px-4 text-center">
        <ul class="list-none m-0 p-0 space-y-4">
            @foreach (menu('main') as $item)
            @php($children = $item->getMenuItems())
            <li>
                <a href="{{ $item->getUrl() ?? '#' }}" class="{{ $item->isActive() ? 'block rounded-2xl bg-emerald-100 px-4 py-2 text-emerald-800 font-semibold' : 'block rounded-2xl px-4 py-2 text-emerald-700 hover:bg-emerald-100 transition-colors' }}">
                    {{ $item->getLabel() }}
                </a>

                @if (count($children) > 0)
                <ul class="list-none m-0 mt-2 ml-4 space-y-2 border-l border-emerald-200 pl-3">
                    @foreach ($children as $child)
                    <li>
                        <a href="{{ $child->getUrl() ?? '#' }}" class="{{ $child->isActive() ? 'block rounded-xl bg-emerald-100 px-3 py-2 text-emerald-800 font-semibold' : 'block rounded-xl px-3 py-2 text-emerald-700 hover:bg-emerald-100 transition-colors' }}">
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
