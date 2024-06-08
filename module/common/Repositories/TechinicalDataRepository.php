<?php

namespace Module\Common\Repositories;


use Module\Common\Models\TechinicalData;
use Module\Common\Repository;

class TechinicalDataRepository extends Repository
{
    function getModel()
    {
        return TechinicalData::class;
    }
}
