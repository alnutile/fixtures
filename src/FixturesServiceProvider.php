<?php

namespace Alnutile\Fixtures;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alnutile\Fixtures\Commands\FixturesCommand;

class FixturesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fixtures')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_fixtures_table')
            ->hasCommand(FixturesCommand::class);
    }
}
