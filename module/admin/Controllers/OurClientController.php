<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\OurClientService;

class OurClientController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'ourclient';
    public $base_route = 'ourclient';
    public $title = 'Our Client';

    public function __construct(OurClientService $ourclientService)
    {
        $this->services = $ourclientService;
    }
}
