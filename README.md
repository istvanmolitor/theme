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


## Seeder regisztrálása

A jogosultságok kezdeti beállításához regisztráld a seedert a `database/seeders/DatabaseSeeder.php` fájlban:

```php
use Molitor\Theme\database\seeders\ThemeSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ThemeSeeder::class,
        ]);
    }
}
```
