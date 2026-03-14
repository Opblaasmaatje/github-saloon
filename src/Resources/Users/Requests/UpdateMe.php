<?php

namespace Opblaasmaatje\Github\Resources\Users\Requests;

use Opblaasmaatje\Github\Bodies\UpdateMeBody;
use Opblaasmaatje\Github\Data\PrivateUser;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

class UpdateMe extends Me implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(
        protected UpdateMeBody $updateMe
    ) {
        //
    }

    /**
     * @return array<array-key, mixed>
     */
    protected function defaultBody(): array
    {
        return $this->updateMe->toArray();
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        if ($response->failed()) {
            return null;
        }

        return PrivateUser::from($response->json());
    }
}
