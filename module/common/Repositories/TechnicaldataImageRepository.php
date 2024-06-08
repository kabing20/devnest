<?php

namespace Module\Common\Repositories;


use Module\Common\Models\TechnicaldataImage;
use Module\Common\Repository;

class TechnicaldataImageRepository extends Repository
{
    function getModel()
    {
        return TechnicaldataImage::class;
    }
}
