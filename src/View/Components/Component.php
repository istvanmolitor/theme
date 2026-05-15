<?php

namespace Molitor\Theme\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component AS ViewComponent;
use Molitor\Theme\Services\ThemeHelper;

class Component extends ViewComponent
{
    public function __construct(
        protected ?string $view = null
    ) {
    }

    public function render(): View
    {
        return app(ThemeHelper::class)->view($this->view, $this->data());
    }
}
