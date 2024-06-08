<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Product;
use Module\Common\Repository;

class ProductRepository extends Repository
{
    function getModel()
    {
        return Product::class;
    }
}
