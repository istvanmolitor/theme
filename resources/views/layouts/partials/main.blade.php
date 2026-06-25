<x-theme::template view="layouts.partials.content-top" />
<main>
    <x-theme::template view="layouts.partials.page-title" />
    @yield('content')
</main>
<x-theme::template view="layouts.partials.content-bottom" />