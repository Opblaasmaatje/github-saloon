<?php

namespace Opblaasmaatje\Github\Bodies;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class UpdateMeBody extends Data
{
    public function __construct(
        public Optional|string $name,
        public Optional|string $email,
        public Optional|string $blog,
        public Optional|string|null $twitter_username,
        public Optional|string $company,
        public Optional|string $location,
        public Optional|bool $hireable,
        public Optional|string $bio
    ) {}
}
