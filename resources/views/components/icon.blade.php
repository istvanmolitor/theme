@props(['name' => ''])

<i {{ $attributes->class(['theme-icon', $name !== '' ? 'icon-'.$name : null]) }} aria-hidden="true"></i>
