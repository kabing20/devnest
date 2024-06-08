<?php

namespace Module\Common\Repositories;


use Module\Common\Models\ProductCategory;
use Module\Common\Repository;

class ProductCategoryRepository extends Repository
{
    function getModel()
    {
        return ProductCategory::class;
    }
}
