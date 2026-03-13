<?php

namespace Opblaasmaatje\Github;

use Illuminate\Support\Facades\Config;
use Opblaasmaatje\Github\Resources\Users;
use Saloon\Http\Connector;

class GithubConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return Config::string('github-saloon.base-url');
    }

    public function users(): Users
    {
        return new Users($this);
    }
}
