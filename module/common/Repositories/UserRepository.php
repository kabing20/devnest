<?php

namespace Module\Common\Repositories;


use Module\Common\Models\User;
use Module\Common\Repository;

class UserRepository extends Repository
{
    function getModel()
    {
        return User::class;
    }
}
