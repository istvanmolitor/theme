@extends('theme::layouts.base')

@section('body')
    @themeInclude('theme::layouts.partials.header')
    <main class="flex-grow">
        @yield('content')
    </main>
    @themeInclude('theme::layouts.partials.footer')
@endsection
