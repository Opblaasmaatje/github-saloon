<?php

namespace Opblaasmaatje\Github\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Opblaasmaatje\Github\GithubServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\LaravelData\LaravelDataServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Opblaasmaatje\\Github\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function getPackageProviders($app): array
    {
        return [
            GithubServiceProvider::class,
            LaravelDataServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

    }
}
