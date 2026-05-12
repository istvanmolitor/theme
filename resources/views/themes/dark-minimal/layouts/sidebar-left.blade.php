@extends('theme::layouts.page')

@section('page')
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <aside class="w-full lg:w-1/4">
                <div class="bg-slate-900 border border-slate-800 rounded p-8 sticky top-24">
                    @yield('sidebar')
                </div>
            </aside>
            <main class="w-full lg:w-3/4">
                <article class="prose prose-invert prose-slate max-w-none">
                    @yield('content')
                </article>
            </main>
        </div>
    </div>
@endsection
