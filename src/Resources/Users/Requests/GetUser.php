<?php

namespace Opblaasmaatje\Github\Resources\Users\Requests;

use Opblaasmaatje\Github\Data\PrivateUser;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

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
        return PrivateUser::from($response->json());
    }
}
