@extends('cms::layouts.page')

@section('page')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex flex-col lg:flex-row gap-8">
            <main class="w-full lg:w-3/4">
                <div class="bg-white rounded-lg shadow-sm p-6 lg:p-8">
                    <article class="prose max-w-none">
                        @yield('content')
                    </article>
                </div>
            </main>
            <aside class="w-full lg:w-1/4">
                <div class="bg-gray-50 border border-gray-100 rounded-lg p-6 sticky top-20">
                    <x-cms-content-region name="sidebar" />
                </div>
            </aside>
        </div>
    </div>
@endsection
