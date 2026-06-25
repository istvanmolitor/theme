<x-theme::template view="layouts.partials.header" />
<x-theme::template view="layouts.partials.top" />
{{ $slot }}
<x-theme::template view="layouts.partials.bottom" />
<x-theme::template view="layouts.partials.footer" />
@yield('script')