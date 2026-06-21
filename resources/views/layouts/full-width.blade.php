@extends('theme::layouts.base')

@section('body')
    <x-theme::component view="layouts.partials.layout">
        <x-theme::component view="layouts.partials.page">
            <x-theme::component view="layouts.partials.main" />
        </x-theme::component>
    </x-theme::component>
@endsection

