<?php

namespace Opblaasmaatje\Github\Resources\Users\Requests;

use Opblaasmaatje\Github\Data\PrivateUser;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Spatie\LaravelData\Optional;

class Me extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/user';
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        if ($response->failed()) {
            return Optional::create();
        }

        return PrivateUser::from($response->json());
    }
}
