@extends('theme::layouts.base')

@section('body')
    <x-theme::component view="layouts.partials.layout">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <x-theme::component view="layouts.partials.main" />
        </div>
    </x-theme::component>
@endsection
