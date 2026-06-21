@extends('theme::layouts.base')

@section('body')
    <x-theme::component view="layouts.partials.layout">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 sm:px-10">
                <x-theme::component view="layouts.partials.main" />
            </div>
        </div>
    </x-theme::component />
@endsection
