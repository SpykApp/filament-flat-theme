<?php

namespace SpykApp\FilamentFlatTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;


class FilamentFlatTheme implements Plugin
{
    public function getId(): string
    {
        return 'filament-flat-theme';
    }

    public function register(Panel $panel): void
    {
        $panel->viteTheme('vendor/spykapp/filament-flat-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}
