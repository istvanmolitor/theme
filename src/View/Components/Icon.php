<?php

declare(strict_types=1);

namespace Molitor\Theme\View\Components;

class Icon extends Component
{
    public function __construct(
        public string $name = ''
    ) {
        parent::__construct('components.icon');
    }
}
