@extends('cms::layouts.page')

@section('page')
    <div class="container mx-auto px-6 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <aside class="w-full lg:w-1/4">
                <div class="bg-pink-50/30 border border-pink-100 rounded-[2.5rem] p-8 sticky top-24">
                    <x-cms-content-region name="sidebar" />
                </div>
            </aside>
            <main class="w-full lg:w-3/4">
                <article class="prose prose-pink max-w-none">
                    @yield('content')
                </article>
            </main>
        </div>
    </div>
@endsection
