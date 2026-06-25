@extends('theme::layouts.base')

@section('body')
    <x-theme::template view="layouts.partials.layout">
        <x-theme::template view="layouts.partials.page">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 sm:px-10">
                    <x-theme::template view="layouts.partials.main" />
                </div>
            </div>
        </x-theme::template>    
    </x-theme::template>
@endsection
