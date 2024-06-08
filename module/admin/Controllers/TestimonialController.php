<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\TestimonialService;

class TestimonialController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'testimonial';
    public $base_route = 'testimonial';
    public $title = 'Testimonial';

    public function __construct(TestimonialService $testimonialService)
    {
        $this->services = $testimonialService;
    }
}
