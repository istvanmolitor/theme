@props(['id', 'label', 'value' => null, 'required' => false, 'autofocus' => false])

<div {{ $attributes->merge(['class' => 'mb-4']) }}>
    <x-theme::label :for="$id" :value="$label" />
    <x-theme::input type="email" :name="$id" :id="$id" :value="$value" :required="$required" :autofocus="$autofocus" />
</div>
