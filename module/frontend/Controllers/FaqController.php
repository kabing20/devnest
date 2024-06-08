<?php

namespace Module\Frontend\Controllers;


use Module\Common\Services\FaqService;

class FaqController extends FrontendBaseController
{
    public $view_path = 'faq';
    public $title = 'Faq';

    public function __construct(FaqService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = [];
        $data['faq'] = $this->service->paginateData(9);
        return view(parent::__loadView('index'),compact('data'));
    }
}
