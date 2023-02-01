<?php

namespace Alnutile\Fixtures;

use Alnutile\Fixtures\Commands\FixturesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
