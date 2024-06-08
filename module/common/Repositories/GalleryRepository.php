<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Gallery;
use Module\Common\Repository;

class GalleryRepository extends Repository
{
    function getModel()
    {
        return Gallery::class;
    }
}
