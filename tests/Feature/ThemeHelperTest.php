<?php

namespace Tests\Feature;

use Illuminate\Contracts\View\View;
use Molitor\Theme\Services\ThemeHelper;
use Tests\TestCase;

class ThemeHelperTest extends TestCase
{
    public function test_theme_helper_can_be_resolved_from_container(): void
    {
        $helper = app(ThemeHelper::class);

        $this->assertInstanceOf(ThemeHelper::class, $helper);
    }

    public function test_theme_helper_view_method_returns_view(): void
    {
        $helper = app(ThemeHelper::class);

        $view = $helper->view('layouts.container');

        $this->assertInstanceOf(View::class, $view);
    }

    public function test_get_view_extracts_view_path_from_package_notation(): void
    {
        $helper = app(ThemeHelper::class);

        $result = $helper->getView('cms::layouts.partials.header');

        $this->assertEquals('layouts.partials.header', $result);
    }

    public function test_get_view_returns_input_when_no_package_notation(): void
    {
        $helper = app(ThemeHelper::class);

        $result = $helper->getView('layouts.partials.header');

        $this->assertEquals('layouts.partials.header', $result);
    }
}

