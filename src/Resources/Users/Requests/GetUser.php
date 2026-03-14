<?php

namespace Opblaasmaatje\Github\Resources\Users\Requests;

use Opblaasmaatje\Github\Data\User;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

class GetUser extends Request
{
    protected Method $method = Method::GET;

    /**
     * Username or Github id.
     */
    public function __construct(
        protected string|int $username,
    ) {
        //
    }

    public function resolveEndpoint(): string
    {
        return "users/{$this->username}";
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        if ($response->failed()) {
            return null;
        }

        return User::from($response->json());
    }
}
