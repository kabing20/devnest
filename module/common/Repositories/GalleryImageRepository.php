<?php

namespace Module\Common\Repositories;


use Module\Common\Models\GalleryImage;
use Module\Common\Repository;

class GalleryImageRepository extends Repository
{
    function getModel()
    {
        return GalleryImage::class;
    }
}
