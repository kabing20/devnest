<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Admin;
use Module\Common\Repository;

class AdminRepository extends Repository
{
    function getModel()
    {
        return Admin::class;
    }
}
