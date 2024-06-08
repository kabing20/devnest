<?php

namespace Module\Common\Repositories;


use Module\Common\Models\AboutUs;
use Module\Common\Repository;

class AboutUsRepository extends Repository
{
    function getModel()
    {
        return AboutUs::class;
    }
}
