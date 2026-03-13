<?php

namespace Opblaasmaatje\Github\Resources;

use Opblaasmaatje\Github\Bodies\UpdateMeBody;
use Opblaasmaatje\Github\GithubConnector;
use Opblaasmaatje\Github\Resources\Users\Requests\GetUser;
use Opblaasmaatje\Github\Resources\Users\Requests\Me;
use Opblaasmaatje\Github\Resources\Users\Requests\UpdateMe;
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

    public function me(): Response
    {
        return $this->connector->send(
            new Me,
        );
    }

    public function updateMe(UpdateMeBody $body): Response
    {
        return $this->connector->send(
            new UpdateMe($body),
        );
    }
}
