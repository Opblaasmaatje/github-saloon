<?php

namespace Opblaasmaatje\Github\Resources;

use Opblaasmaatje\Github\GithubConnector;
use Opblaasmaatje\Github\Resources\Users\Requests\GetUser;
use Saloon\Http\Response;

class Users
{
    public function __construct(
        protected GithubConnector $connector,
    ) {
        //
    }

    public function getUser(string $username): Response
    {
        return $this->connector->send(
            new GetUser($username),
        );
    }
}
