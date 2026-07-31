<?php

namespace App\Providers;

use Bavix\Wallet\WalletConfigure;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        WalletConfigure::ignoreMigrations();
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['tg', 'ru', 'uz', 'en'])
                ->visible(outsidePanels: true)
                ->flags([
                    'tg' => asset('flags/tg.svg'),
                    'ru' => asset('flags/ru.svg'),
                    'uz' => asset('flags/uz.svg'),
                    'en' => asset('flags/us.svg'),
                ])
                ->labels([
                    'tg' => 'Тоҷикӣ',
                    'ru' => 'Русский',
                    'uz' => 'Oʻzbekcha',
                    'en' => 'English',
                ])
                ->circular()
            ;
        });
    }
}
