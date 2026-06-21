<x-theme::component view="layouts.partials.header" />
<x-theme::component view="layouts.partials.top" />
{{ $slot }}
<x-theme::component view="layouts.partials.bottom" />
<x-theme::component view="layouts.partials.footer" />
@yield('script')