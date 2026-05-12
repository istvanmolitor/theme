@extends('theme::layouts.page')

@section('page')
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <aside class="w-full lg:w-1/4">
                <div class="bg-emerald-50/50 border border-emerald-100 rounded-3xl p-8 sticky top-28">
                    @yield('sidebar')
                </div>
            </aside>
            <main class="w-full lg:w-3/4">
                <article class="prose prose-emerald max-w-none">
                    @yield('content')
                </article>
            </main>
        </div>
    </div>
@endsection
