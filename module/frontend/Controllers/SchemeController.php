<?php

namespace Module\Frontend\Controllers;


use Module\Common\Services\SchemeService;

class SchemeController extends FrontendBaseController
{
    public $view_path = 'scheme';
    public $title = 'Scheme';

    public function __construct(SchemeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        // $data['scheme'] = $this->service->paginateData(4);
        $data['scheme'] = $this->service->getAll();
        return view(parent::__loadView('index'),compact('data'));
    }
}
