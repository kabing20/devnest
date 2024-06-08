<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\TechnicaldataImageService;

class TechnicaldataImageController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'technicaldataimage';
    public $base_route = 'technicaldataimage';
    public $title = 'Technicaldata Image';

    public function __construct(TechnicaldataImageService $technicaldataimageService)
    {
        $this->services = $technicaldataimageService;
    }
}
