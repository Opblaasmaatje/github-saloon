<?php

namespace Opblaasmaatje\Github;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;

class AuthenticatableGithubConnector extends GithubConnector
{
    public function __construct(
        protected string $token,
    ) {
        //
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new TokenAuthenticator($this->token);
    }
}
