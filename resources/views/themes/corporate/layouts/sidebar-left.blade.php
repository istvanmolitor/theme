@extends('cms::layouts.page')

@section('page')
    <div class="container mx-auto px-4 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <aside class="w-full lg:w-1/4">
                <div class="bg-slate-50 border border-slate-100 rounded-sm p-8 sticky top-24">
                    <x-cms-content-region name="sidebar" />
                </div>
            </aside>
            <main class="w-full lg:w-3/4">
                <article class="prose prose-slate max-w-none">
                    @yield('content')
                </article>
            </main>
        </div>
    </div>
@endsection
