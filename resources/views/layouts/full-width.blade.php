@extends('theme::layouts.base')

@section('body')
    <x-theme::template view="layouts.partials.layout">
        <x-theme::template view="layouts.partials.page">
            <x-theme::template view="layouts.partials.main" />
        </x-theme::template>
    </x-theme::template>
@endsection

