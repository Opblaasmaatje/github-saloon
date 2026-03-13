<?php

namespace Opblaasmaatje\Github;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GithubServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('github-saloon')->hasConfigFile();
    }
}
