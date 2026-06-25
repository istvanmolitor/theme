<?php

use Molitor\Theme\Services\ThemeHelper;

if (! function_exists('template')) {
    function template(string $view, array $data = [], array $mergeData = [])
    {
        return app(ThemeHelper::class)->template($view, $data, $mergeData);
    }
}
