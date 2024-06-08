<?php

namespace Module\Common\Repositories;


use Module\Common\Models\BlogCategory;
use Module\Common\Repository;

class BlogCategoryRepository extends Repository
{
    function getModel()
    {
        return BlogCategory::class;
    }
}
