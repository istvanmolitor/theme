@php
    $menuName = $menuName ?? 'main';
    $variant = $variant ?? 'desktop';
    $items = $items ?? app(\Molitor\Menu\Services\MenuManager::class)->build($menuName)->getMenuItems();
@endphp

<ul class="list-none m-0 p-0 {{ $variant === 'mobile' ? 'space-y-2' : 'flex items-center gap-2' }}">
    @foreach ($items as $item)
        @php($children = $item->getMenuItems())
        <li class="{{ $variant === 'desktop' ? 'relative group' : '' }}">
            <a href="{{ $item->getUrl() ?? '#' }}"
               @if ($variant === 'desktop' && count($children) > 0)
                   onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
               @endif
               class="{{ $variant === 'mobile'
                    ? ($item->isActive() ? 'block rounded-md bg-white/20 px-3 py-2 font-semibold text-white' : 'block rounded-md px-3 py-2 text-orange-100 hover:bg-white/10 hover:text-white transition-colors')
                    : ($item->isActive() ? 'inline-flex items-center gap-1 px-4 py-2 rounded-md bg-white text-orange-600 font-semibold' : 'inline-flex items-center gap-1 px-4 py-2 rounded-md text-orange-100 hover:bg-orange-500 hover:text-white transition-colors') }}">
                {{ $item->getLabel() }}
            </a>

            @if (count($children) > 0)
                <ul class="list-none m-0 {{ $variant === 'mobile' ? 'mt-2 ml-4 space-y-2 border-l border-orange-400 pl-3' : 'absolute left-0 top-full z-50 hidden w-64 space-y-2 rounded-md border border-orange-400 bg-orange-600 p-3 shadow-lg group-hover:block group-focus-within:block' }}">
                    @foreach ($children as $child)
                        <li>
                            <a href="{{ $child->getUrl() ?? '#' }}"
                               class="{{ $child->isActive() ? 'block rounded-md bg-white/20 px-3 py-2 font-semibold text-white' : 'block rounded-md px-3 py-2 text-orange-100 hover:bg-white/10 hover:text-white transition-colors' }}">
                                {{ $child->getLabel() }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>



