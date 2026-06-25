<?php

namespace Molitor\Theme\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component as ViewComponent;
use Molitor\Theme\Services\ThemeHelper;

class Template extends ViewComponent
{
    public function __construct(
        protected string $view
    ) {}

    public function render(): View
    {
        $themeHelper = app(ThemeHelper::class);
        $realView = $themeHelper->getRealView($this->view);

        if($realView) {
            return view($realView, $this->data());
        }
        else {
            return view('theme::partials.no-component-template', [
                'view' => $this->view,
                'opportunities' => $themeHelper->getOpportunities($this->view),
            ]);
        }
    }
}
