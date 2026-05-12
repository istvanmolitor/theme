@extends('theme::layouts.page')

@section('page')
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <main class="w-full lg:w-3/4">
                <article class="prose prose-orange max-w-none">
                    @yield('content')
                </article>
            </main>
            <aside class="w-full lg:w-1/4">
                <div class="bg-orange-50 border border-orange-100 rounded-xl p-6 sticky top-24">
                    @yield('sidebar')
                </div>
            </aside>
        </div>
    </div>
@endsection
