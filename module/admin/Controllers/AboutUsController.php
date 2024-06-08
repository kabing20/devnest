<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\AboutUsService;

class AboutUsController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'aboutus';
    public $base_route = 'aboutus';
    public $title = 'About Us';

    public function __construct(AboutUsService $aboutusService)
    {
        $this->services = $aboutusService;
    }

    public function index()
    {
        $row = $this->services->first();

        return view(parent::__loadView('create'),compact('row'));
    }
}
