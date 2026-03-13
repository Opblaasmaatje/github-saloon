<?php

namespace Opblaasmaatje\Github\Facades;

use Illuminate\Support\Facades\Facade;
use Opblaasmaatje\Github\GithubConnector;
use Opblaasmaatje\Github\Resources\Users;

/**
 * @method static Users users()
 *
 * @see GithubConnector
 */
class Github extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return GithubConnector::class;
    }
}
