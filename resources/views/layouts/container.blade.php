@extends('theme::layouts.base')

@section('body')
    <x-theme::template view="layouts.partials.layout">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <x-theme::template view="layouts.partials.page">
                <x-theme::template view="layouts.partials.main" />
            </x-theme::template>
        </div>
    </x-theme::template>
@endsection
