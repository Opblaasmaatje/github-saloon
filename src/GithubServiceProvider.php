<?php

namespace Opblaasmaatje\Github;

use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GithubServiceProvider extends PackageServiceProvider
{
    public function packageBooted(): void
    {
        $this->app->singleton(GithubConnector::class, function () {
            if (! Config::get('github-saloon.token')) {
                return new UnauthenticatableGithubConnector;
            }

            return new AuthenticatableGithubConnector(Config::string('github-saloon.token'));
        });

    }

    public function configurePackage(Package $package): void
    {
        $package->name('github-saloon')->hasConfigFile();
    }
}
