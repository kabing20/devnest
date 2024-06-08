<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Contactus;
use Module\Common\Repository;

class ContactusRepository extends Repository
{
    function getModel()
    {
        return Contactus::class;
    }
}
