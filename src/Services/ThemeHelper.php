<?php

namespace Molitor\Theme\Services;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as ViewFacade;

class ThemeHelper
{
    /**
     * Visszaad egy view-t, az aktív téma view-könyvtárát figyelembe véve.
     * Ha a témában létezik a megfelelő blade fájl, azt tölti be,
     * egyébként az eredeti view-t.
     *
     * @param  string  $view    A view neve (pl. 'cms::page.show')
     * @param  array   $data    Az átadandó adatok
     * @param  array   $mergeData
     * @return View
     */
    public static function view(string $view, array $data = [], array $mergeData = []): View
    {
        $activeTheme = app(ThemeRegistry::class)->getActiveTheme();

        if ($activeTheme) {
            $themeViewPath = $activeTheme->getViewPath();

            if ($themeViewPath) {
                // Konvertáljuk a view nevet fájlútvonallá (pl. cms::page.show -> page/show.blade.php)
                $viewFile = str_replace('.', '/', static::stripNamespace($view)) . '.blade.php';
                $fullPath = rtrim($themeViewPath, '/') . '/' . $viewFile;

                if (file_exists($fullPath)) {
                    // Ideiglenesen regisztráljuk a téma view-könyvtárát egyedi namespace-szel
                    $themeNamespace = 'theme_override_' . $activeTheme->getSlug();

                    if (!ViewFacade::exists($themeNamespace . '::' . static::stripNamespace($view))) {
                        ViewFacade::addNamespace($themeNamespace, $themeViewPath);
                    }

                    return ViewFacade::make(
                        $themeNamespace . '::' . static::stripNamespace($view),
                        $data,
                        $mergeData
                    );
                }
            }
        }

        return ViewFacade::make($view, $data, $mergeData);
    }

    /**
     * Eltávolítja a namespace prefixet a view névből.
     * Pl. 'cms::page.show' -> 'page.show', 'page.show' -> 'page.show'
     */
    protected static function stripNamespace(string $view): string
    {
        if (str_contains($view, '::')) {
            return explode('::', $view, 2)[1];
        }
        return $view;
    }
}

