<?php

namespace Module\Common\Repositories;


use Module\Common\Models\OurClient;
use Module\Common\Repository;

class OurClientRepository extends Repository
{
    function getModel()
    {
        return OurClient::class;
    }
}
