# Theme package

Ez a csomag témakezelést biztosít a Laravel alkalmazáshoz.

## Telepítés

A ThemeServiceProvider automatikusan regisztrálva van a Laravel alkalmazásban.

## Konfiguráció

A csomag publikálható config fájllal rendelkezik. A config fájl publikálásához futtassa:

```bash
php artisan vendor:publish --tag=theme-config
```

Ez létrehozza a `config/theme.php` fájlt, ahol testreszabhatja a téma beállításokat:

- `default`: Az alapértelmezett téma neve
- `themes`: Elérhető témák listája
- `inheritance`: Téma öröklődés engedélyezése
- `cache`: Téma gyorsítótár engedélyezése
- `cache_lifetime`: Gyorsítótár élettartama percekben

## Használat

A témák a `resources/views/themes` könyvtárban találhatók.

