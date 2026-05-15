<?php

namespace Molitor\Theme\Services;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ThemeComponent extends Component
{
    public function __construct(
        $componentName
    ) {
        $this->componentName = $componentName;
    }

    public function render(): View
    {
        return app(ThemeHelper::class)->view('components.' . $this->componentName, $this->data());
    }
}
