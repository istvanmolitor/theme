@php
    $menuName = $menuName ?? 'main';
    $variant = $variant ?? 'desktop';
    $items = $items ?? app(\Molitor\Menu\Services\MenuManager::class)->build($menuName)->getMenuItems();
@endphp

<ul class="list-none m-0 p-0 {{ $variant === 'mobile' ? 'space-y-1' : 'flex items-center gap-1' }}">
    @foreach ($items as $item)
        @php($children = $item->getMenuItems())
        <li class="{{ $variant === 'desktop' ? 'relative group' : '' }}">
            <a href="{{ $item->getUrl() ?? '#' }}"
               @if ($variant === 'desktop' && count($children) > 0)
                   onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
               @endif
               class="{{ $variant === 'mobile'
                    ? ($item->isActive() ? 'block rounded bg-sky-50 px-3 py-2 font-semibold text-sky-700' : 'block rounded px-3 py-2 text-slate-700 hover:bg-slate-50 hover:text-sky-700 transition-colors')
                    : ($item->isActive() ? 'inline-flex items-center gap-1 px-4 py-2 text-sky-700 font-semibold border-b-2 border-sky-600' : 'inline-flex items-center gap-1 px-4 py-2 text-slate-700 hover:text-sky-700 hover:bg-slate-50 rounded transition-colors') }}">
                {{ $item->getLabel() }}
            </a>

            @if (count($children) > 0)
                <ul class="list-none m-0 {{ $variant === 'mobile' ? 'mt-1 ml-4 space-y-1 border-l border-slate-200 pl-3' : 'absolute left-0 top-full z-50 hidden w-64 space-y-1 rounded border border-slate-200 bg-white p-2 shadow-lg group-hover:block group-focus-within:block' }}">
                    @foreach ($children as $child)
                        <li>
                            <a href="{{ $child->getUrl() ?? '#' }}"
                               class="{{ $child->isActive() ? 'block rounded bg-sky-50 px-3 py-2 font-semibold text-sky-700' : 'block rounded px-3 py-2 text-slate-700 hover:bg-slate-50 hover:text-sky-700 transition-colors' }}">
                                {{ $child->getLabel() }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>



