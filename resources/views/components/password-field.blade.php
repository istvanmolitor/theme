@props(['id', 'label', 'required' => false, 'autofocus' => false])

<div {{ $attributes->merge(['class' => 'mb-6']) }}>
    <x-theme::label :for="$id" :value="$label" />
    <x-theme::input type="password" :name="$id" :id="$id" :required="$required" :autofocus="$autofocus" />
</div>
