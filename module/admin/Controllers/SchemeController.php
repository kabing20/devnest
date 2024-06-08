<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\SchemeService;

class SchemeController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'scheme';
    public $base_route = 'scheme';
    public $title = 'Scheme';

    public function __construct(SchemeService $schemeService)
    {
        $this->services = $schemeService;
    }
}
