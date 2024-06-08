<?php

namespace Module\Common\Repositories;


use Module\Common\Models\HomeSlider;
use Module\Common\Repository;

class HomeSliderRepository extends Repository
{
    function getModel()
    {
        return HomeSlider::class;
    }
}
