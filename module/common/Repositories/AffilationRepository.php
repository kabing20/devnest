<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Affilation;
use Module\Common\Repository;

class AffilationRepository extends Repository
{
    function getModel()
    {
        return Affilation::class;
    }
}
