<?php

namespace Opblaasmaatje\Github\Resources\Users\Requests;

use Opblaasmaatje\Github\Data\User;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Spatie\LaravelData\Optional;

class GetUser extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected string $username,
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
            return Optional::create();
        }

        return User::from($response->json());
    }
}
