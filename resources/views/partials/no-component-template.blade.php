<div style="border: 2px dashed #f59e0b; background: #fffbeb; padding: 1rem 1.25rem; border-radius: 0.5rem; font-family: monospace; font-size: 0.875rem; color: #92400e;">
    <div style="font-weight: bold; margin-bottom: 0.5rem;">⚠ Hiányzó komponens template</div>
    <div><span style="opacity: 0.6;">view:</span> {{ $view }}</div>
    <div style="margin-top: 0.75rem; opacity: 0.6;">Keresett helyek:</div>
    <ul style="margin: 0.25rem 0 0 1rem; padding: 0;">
        @foreach ($opportunities as $path)
            <li>{{ $path }}</li>
        @endforeach
    </ul>
</div>