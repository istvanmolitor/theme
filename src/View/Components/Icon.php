<?php

namespace Molitor\Theme\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component as ViewComponent;

class Icon extends ViewComponent
{
    public function __construct(
        public string $name = ''
    ) {}

    public function render(): View
    {
        return view('theme::components.icon');
    }
}
