@extends('theme::layouts.base')

@section('body')
    <x-theme::component view="layouts.partials.header" />
    <main class="flex-grow">
        @yield('main')
    </main>
    <x-theme::component view="layouts.partials.footer" />
@endsection
