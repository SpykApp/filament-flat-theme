<?php

namespace SpykApp\FilamentFlatTheme;


use Illuminate\Support\ServiceProvider;


class FilamentFlatThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \SpykApp\FilamentFlatTheme\Console\FilamentFlatThemeInstall::class,
        ]);

    }

    public function boot(): void
    {

    }
}
