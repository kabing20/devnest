<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Subscription;
use Module\Common\Repository;

class SubscriptionRepository extends Repository
{
    function getModel()
    {
        return Subscription::class;
    }
}
