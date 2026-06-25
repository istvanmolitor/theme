<nav class="hidden md:flex space-x-6 items-center">
    <ul class="list-none m-0 p-0 flex items-center gap-6">
        @foreach (menu('main') as $item)
        @php($children = $item->getMenuItems())
        <li class="relative group">
            <a href="{{ $item->getUrl() ?? '#' }}" @if (count($children)> 0)
                onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
                @endif
                class="{{ $item->isActive() ? 'inline-flex items-center gap-1 px-4 py-2 rounded-full bg-pink-100 text-pink-500 font-semibold' : 'inline-flex items-center gap-1 px-4 py-2 rounded-full text-purple-500 hover:bg-pink-50 transition-colors' }}">
                {{ $item->getLabel() }}
            </a>

            @if (count($children) > 0)
            <ul class="list-none m-0 absolute left-0 top-full z-50 hidden w-64 space-y-2 rounded-3xl border border-pink-100 bg-pink-50 p-3 shadow-lg group-hover:block group-focus-within:block">
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
</nav>
