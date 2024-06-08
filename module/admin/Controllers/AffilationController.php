<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\AffilationService;

class AffilationController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'affilation';
    public $base_route = 'affilation';
    public $title = 'Affilation';

    public function __construct(AffilationService $affilationService)
    {
        $this->services = $affilationService;
    }
}
