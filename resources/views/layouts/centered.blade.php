@extends('theme::layouts.default')

@section('main')
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 border border-gray-200">
            @yield('content')
        </div>
    </div>
@endsection
