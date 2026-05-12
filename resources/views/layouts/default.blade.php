@extends('theme::layouts.base')

@section('body')
    @themeInclude('layouts.partials.header')
    <main class="flex-grow">
        @yield('main')
    </main>
    @themeInclude('layouts.partials.footer')
@endsection
