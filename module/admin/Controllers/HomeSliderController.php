<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\HomeSliderService;

class HomeSliderController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'homeslider';
    public $base_route = 'homeslider';
    public $title = 'Home Slider';

    public function __construct(HomeSliderService $homesliderService)
    {
        $this->services = $homesliderService;
    }
    public function index()
    {
        $row = $this->services->first();

        return view(parent::__loadView('create'),compact('row'));
    }
}
