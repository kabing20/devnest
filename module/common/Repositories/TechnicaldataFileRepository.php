<?php

namespace Module\Common\Repositories;


use Module\Common\Models\TechnicaldataFile;
use Module\Common\Repository;

class TechnicaldataFileRepository extends Repository
{
    function getModel()
    {
        return TechnicaldataFile::class;
    }
}
