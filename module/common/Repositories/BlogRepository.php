<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Blog;
use Module\Common\Repository;

class BlogRepository extends Repository
{
    function getModel()
    {
        return Blog::class;
    }
}
