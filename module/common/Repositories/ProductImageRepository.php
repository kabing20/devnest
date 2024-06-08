<?php

namespace Module\Common\Repositories;


use Module\Common\Models\ProductImage;
use Module\Common\Repository;

class ProductImageRepository extends Repository
{
    function getModel()
    {
        return ProductImage::class;
    }
}
