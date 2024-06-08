<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Generalsetting;
use Module\Common\Repository;

class GeneralsettingRepository extends Repository
{
    function getModel()
    {
        return Generalsetting::class;
    }
}
