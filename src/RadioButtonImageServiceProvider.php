<?php

namespace IbrahimBougaoua\RadioButtonImage;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use IbrahimBougaoua\RadioButtonImage\Commands\RadioButtonImageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RadioButtonImageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('radiobuttonimage')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(RadioButtonImageCommand::class);
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('radiobuttonimage-styles', __DIR__.'/../dist/css/style.css'),
        ], 'radiobuttonimage');
    }
}
