<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Testimonial;
use Module\Common\Repository;

class TestimonialRepository extends Repository
{
    function getModel()
    {
        return Testimonial::class;
    }
}
