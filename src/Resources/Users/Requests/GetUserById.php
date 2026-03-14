<?php

namespace Opblaasmaatje\Github\Resources\Users\Requests;

use Opblaasmaatje\Github\Data\User;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

class GetUserById extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected int $id,
    ) {
        //
    }

    public function resolveEndpoint(): string
    {
        return "user/{$this->id}";
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        if ($response->failed()) {
            return null;
        }

        return User::from($response->json());
    }
}
