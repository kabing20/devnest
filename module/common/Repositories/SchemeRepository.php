<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Scheme;
use Module\Common\Repository;

class SchemeRepository extends Repository
{
    function getModel()
    {
        return Scheme::class;
    }
}
