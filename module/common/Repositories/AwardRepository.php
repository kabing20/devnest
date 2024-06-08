<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Award;
use Module\Common\Repository;

class AwardRepository extends Repository
{
    function getModel()
    {
        return Award::class;
    }
}
