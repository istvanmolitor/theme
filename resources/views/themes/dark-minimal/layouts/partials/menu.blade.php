<nav class="hidden md:flex space-x-12">
    <ul class="list-none m-0 p-0 flex items-center gap-12">
        @foreach (menu('main') as $item)
        @php($children = $item->getMenuItems())
        <li class="relative group">
            <a href="{{ $item->getUrl() ?? '#' }}" @if (count($children)> 0)
                onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
                @endif
                class="{{ $item->isActive() ? 'inline-flex items-center gap-1 text-white uppercase tracking-widest border-b border-white pb-1' : 'inline-flex items-center gap-1 text-slate-400 hover:text-white transition-colors uppercase tracking-widest' }}">
                {{ $item->getLabel() }}
            </a>

            @if (count($children) > 0)
            <ul class="list-none m-0 absolute left-0 top-full z-50 hidden w-64 space-y-2 rounded-md border border-slate-800 bg-slate-900 p-3 shadow-xl group-hover:block group-focus-within:block">
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
</nav>
