<?php

namespace Module\Frontend\Controllers;


use Module\Common\Services\AwardService;

class AwardController extends FrontendBaseController
{
    public $view_path = 'award';
    public $title = 'Award';

    public function __construct(AwardService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        // $data['awards'] = $this->service->paginateData(9);
        $data['awards'] = $this->service->getAll();
        return view(parent::__loadView('index'),compact('data'));
    }
}
