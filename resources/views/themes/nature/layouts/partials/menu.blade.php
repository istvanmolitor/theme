<nav class="hidden md:flex space-x-10">
    <ul class="list-none m-0 p-0 flex items-center gap-10">
        @foreach (menu('main') as $item)
        @php($children = $item->getMenuItems())
        <li class="relative group">
            <a href="{{ $item->getUrl() ?? '#' }}" @if (count($children)> 0)
                onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
                @endif
                class="{{ $item->isActive() ? 'inline-flex items-center gap-1 text-emerald-800 font-semibold border-b-2 border-emerald-500 pb-1' : 'inline-flex items-center gap-1 text-emerald-700 hover:text-emerald-900 transition-colors' }}">
                {{ $item->getLabel() }}
            </a>

            @if (count($children) > 0)
            <ul class="list-none m-0 absolute left-0 top-full z-50 hidden w-64 space-y-2 rounded-2xl border border-emerald-100 bg-emerald-50 p-3 shadow-lg group-hover:block group-focus-within:block">
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
</nav>
