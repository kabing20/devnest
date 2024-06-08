<?php

namespace Module\Common\Services;

use Module\Common\Repositories\SubscriptionRepository;
use Module\Common\Services;

class SubscriptionService
{

    use Services;

    public function __construct(SubscriptionRepository $repository)
    {
        $this->repository = $repository;
    }
}
