<div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 py-3">
    <div class="flex flex-col space-y-1">
        <ul class="list-none m-0 p-0 space-y-2">
            @foreach (menu('main') as $item)
            @php($children = $item->getMenuItems())
            <li>
                <a href="{{ $item->getUrl() ?? '#' }}" class="{{ $item->isActive() ? 'block rounded-md bg-indigo-50 px-3 py-2 text-indigo-600 font-medium' : 'block rounded-md px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-indigo-600 transition-colors' }}">
                    {{ $item->getLabel() }}
                </a>

                @if (count($children) > 0)
                <ul class="list-none m-0 mt-1 ml-4 space-y-1 border-l border-gray-200 pl-3">
                    @foreach ($children as $child)
                    <li>
                        <a href="{{ $child->getUrl() ?? '#' }}" class="{{ $child->isActive() ? 'block rounded-md bg-indigo-50 px-3 py-2 text-indigo-600 font-medium' : 'block rounded-md px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-indigo-600 transition-colors' }}">
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
