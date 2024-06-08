<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Models\Generalsetting;
use Module\Common\Services\GeneralsettingService;

class GeneralsettingController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'generalsetting';
    public $base_route = 'generalsetting';
    public $title = 'General Setting';

    public function __construct(GeneralsettingService $generalsettingService)
    {
        $this->services = $generalsettingService;
    }

    public function index()
    {
        $setting = $this->services->getDataInArray();

        return view(parent::__loadView('create'),compact('setting'));
    }
}
