<?php

namespace IbrahimBougaoua\RadioButtonImage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IbrahimBougaoua\RadioButtonImage\Commands\RadioButtonImageCommand;

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
