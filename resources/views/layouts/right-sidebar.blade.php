@extends('theme::layouts.base')

@section('body')
    <x-theme::template view="layouts.partials.layout">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <x-theme::template view="layouts.partials.page">
                <div class="flex flex-col lg:flex-row gap-8">
                    <div class="w-full lg:w-3/4">
                        <x-theme::template view="layouts.partials.main" />
                    </div>
                    <div class="w-full lg:w-1/4">
                        <x-theme::template view="layouts.partials.sidebar" />
                    </div>
                </div>
            </x-theme::template>
        </div>
    </x-theme::template>
@endsection
