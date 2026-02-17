<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Theme
    |--------------------------------------------------------------------------
    |
    | This is the default theme that will be used for the application.
    |
    */
    'default' => env('THEME_DEFAULT', 'default'),

    /*
    |--------------------------------------------------------------------------
    | Available Themes
    |--------------------------------------------------------------------------
    |
    | Here you can define the available themes for your application.
    | The key is the theme identifier and the value is an array with:
    | - 'name': human-readable name
    | - 'path': path to the theme directory (relative to resources/views/themes)
    | - 'assets': path to theme assets (relative to public)
    |
    */
    'themes' => [
        'default' => [
            'name' => 'Alapértelmezett téma',
            'path' => 'themes/default',
            'assets' => 'themes/default',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Theme Inheritance
    |--------------------------------------------------------------------------
    |
    | Enable theme inheritance to allow themes to extend other themes.
    |
    */
    'inheritance' => true,

    /*
    |--------------------------------------------------------------------------
    | Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | The lifetime of the theme cache in minutes.
    |
    */
    'cache_lifetime' => 60,
];

