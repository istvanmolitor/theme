<?php

use Illuminate\Support\Facades\Route;
use Molitor\Theme\Http\Controllers\Api\LayoutController;

Route::prefix('api/theme')->middleware(['api'])->group(function () {
    Route::get('layouts', [LayoutController::class, 'index'])->name('theme.api.layouts.index');
});
