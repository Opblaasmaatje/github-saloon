<?php

namespace Opblaasmaatje\Github\Data;

use Spatie\LaravelData\Data;

class PrivateUser extends Data
{
    public function __construct(
        public readonly string $login,
        public readonly int $id,
        public readonly string $node_id,
        public readonly string $avatar_url,
        public readonly string $gravatar_id,
        public readonly string $url,
        public readonly string $html_url,
        public readonly string $followers_url,
        public readonly string $following_url,
        public readonly string $gists_url,
        public readonly string $starred_url,
        public readonly string $subscriptions_url,
        public readonly string $organizations_url,
        public readonly string $repos_url,
        public readonly string $events_url,
        public readonly string $received_events_url,
        public readonly string $type,
        public readonly bool $site_admin,
        public readonly ?string $name,
        public readonly ?string $company,
        public readonly ?string $blog,
        public readonly ?string $location,
        public readonly ?string $email,
        public readonly ?bool $hireable,
        public readonly ?string $bio,
        public readonly ?string $twitter_username,
        public readonly int $public_repos,
        public readonly int $public_gists,
        public readonly int $followers,
        public readonly int $following,
        public readonly \DateTimeImmutable $created_at,
        public readonly \DateTimeImmutable $updated_at,
    ) {}
}
