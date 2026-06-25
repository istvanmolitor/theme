<nav class="hidden md:flex space-x-8">
    <ul class="list-none m-0 p-0 flex items-center gap-8">
        @foreach (menu('main') as $item)
        @php($children = $item->getMenuItems())
        <li class="relative group">
            <a href="{{ $item->getUrl() ?? '#' }}" @if (count($children)> 0)
                onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
                @endif
                class="{{ $item->isActive() ? 'inline-flex items-center gap-1 text-indigo-600 font-medium border-b-2 border-indigo-600 pb-1' : 'inline-flex items-center gap-1 text-gray-600 hover:text-indigo-600 transition-colors' }}">
                {{ $item->getLabel() }}
            </a>

            @if (count($children) > 0)
            <ul class="list-none m-0 absolute left-0 top-full z-50 hidden w-56 space-y-1 rounded-md border border-gray-100 bg-white p-2 shadow-lg group-hover:block group-focus-within:block">
                @foreach ($children as $child)
                <li>
                    <a href="{{ $child->getUrl() ?? '#' }}" class="{{ $child->isActive() ? 'block rounded-md bg-indigo-50 px-3 py-2 text-indigo-600 font-medium' : 'block rounded-md px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-indigo-600 transition-colors' }}">
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
