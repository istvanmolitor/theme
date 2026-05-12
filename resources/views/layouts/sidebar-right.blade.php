@extends('theme::layouts.base')

@section('content')
    @themeInclude('theme::layouts.partials.header')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="w-full lg:w-3/4">
                <main>
                    @yield('content')
                </main>
            </div>
            <aside class="w-full lg:w-1/4 bg-white rounded-lg shadow-sm p-6">
                @yield('sidebar')
                @yield('sidebar')
            </aside>
        </div>
    </div>
    @themeInclude('theme::layouts.partials.footer')
@endsection

