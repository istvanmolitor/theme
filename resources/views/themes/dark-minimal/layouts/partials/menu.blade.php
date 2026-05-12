@php
    $menuName = $menuName ?? 'main';
    $variant = $variant ?? 'desktop';
    $items = $items ?? app(\Molitor\Menu\Services\MenuManager::class)->build($menuName)->getMenuItems();
@endphp

<ul class="list-none m-0 p-0 {{ $variant === 'mobile' ? 'space-y-4' : 'flex items-center gap-12' }}">
    @foreach ($items as $item)
        @php($children = $item->getMenuItems())
        <li class="{{ $variant === 'desktop' ? 'relative group' : '' }}">
            <a href="{{ $item->getUrl() ?? '#' }}"
               @if ($variant === 'desktop' && count($children) > 0)
                   onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
               @endif
               class="{{ $variant === 'mobile'
                    ? ($item->isActive() ? 'block text-white font-light tracking-widest uppercase border-l-2 border-white pl-3' : 'block text-slate-400 hover:text-white transition-colors uppercase tracking-widest')
                    : ($item->isActive() ? 'inline-flex items-center gap-1 text-white uppercase tracking-widest border-b border-white pb-1' : 'inline-flex items-center gap-1 text-slate-400 hover:text-white transition-colors uppercase tracking-widest') }}">
                {{ $item->getLabel() }}
            </a>

            @if (count($children) > 0)
                <ul class="list-none m-0 {{ $variant === 'mobile' ? 'mt-2 ml-4 space-y-2 border-l border-slate-700 pl-3' : 'absolute left-0 top-full z-50 hidden w-64 space-y-2 rounded-md border border-slate-800 bg-slate-900 p-3 shadow-xl group-hover:block group-focus-within:block' }}">
                    @foreach ($children as $child)
                        <li>
                            <a href="{{ $child->getUrl() ?? '#' }}"
                               class="{{ $child->isActive() ? 'block text-white uppercase tracking-widest' : 'block text-slate-500 hover:text-white transition-colors uppercase tracking-widest' }}">
                                {{ $child->getLabel() }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>



