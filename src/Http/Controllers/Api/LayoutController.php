<?php

declare(strict_types=1);

namespace Molitor\Theme\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Molitor\Theme\Services\LayoutService;

class LayoutController
{
    public function __construct(
        private LayoutService $layoutService
    ) {}

    public function index(): JsonResponse
    {
        $layouts = collect($this->layoutService->getLayouts())
            ->map(fn ($config, $key) => ['value' => $key, 'label' => $config['name']])
            ->values();

        return response()->json(['data' => $layouts]);
    }
}
