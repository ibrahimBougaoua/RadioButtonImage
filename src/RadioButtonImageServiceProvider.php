<?php

namespace IbrahimBougaoua\RadioButtonImage;

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
            ->hasMigration('create_radiobuttonimage_table')
            ->hasCommand(RadioButtonImageCommand::class);
    }
}
