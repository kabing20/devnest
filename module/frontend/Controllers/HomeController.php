<?php

namespace Module\Frontend\Controllers;


use Module\Common\Models\OurClient;
use Module\Common\Services\AboutUsService;
use Module\Common\Services\AffilationService;
use Module\Common\Services\AwardService;
use Module\Common\Services\BlogService;
use Module\Common\Services\EventService;
use Module\Common\Services\HomeSliderService;
use Module\Common\Services\OurClientService;
use Module\Common\Services\ProductService;
use Module\Common\Services\SchemeService;

class HomeController extends FrontendBaseController
{
    public $view_path = 'home';
    public $title = 'Home';

    public function __construct(HomeSliderService $homeSliderService,ProductService $productService,SchemeService $schemeService,AboutUsService $aboutUsService)
    {
        $this->homeSliderService = $homeSliderService;
        $this->productService = $productService;
        $this->schemeService = $schemeService;
        $this->aboutUsService = $aboutUsService;
    }

    public function index()
    {
        $data['slider'] = $this->homeSliderService->first();
        $data['product'] = $this->productService->getAll();
        $data['scheme'] = $this->schemeService->getAll();
        $data['aboutus'] = $this->aboutUsService->first();
        return view(parent::__loadView('index'),compact('data'));
    }

    public function ajaxEventHomePage(EventService $service)
    {
        $data = [];
        $data['row'] = $service->paginateData(2);
        return view(parent::__loadView('ajax.event'),compact('data'));
    }

    public function ajaxAffilationHomePage(AffilationService $service)
    {
        $data = [];
        $data['row'] = $service->paginateData(6);
        return view(parent::__loadView('ajax.affiliation'),compact('data'));
    }

    public function ajaxBlogHomePage(BlogService $service)
    {
        $data = [];
        $data['row'] = $service->paginateData(2);

        return view(parent::__loadView('ajax.blog'),compact('data'));
    }

    public function ajaxAwardHomePage(AwardService $service)
    {
        $data = [];
        $data['row'] = $service->first();
        return view(parent::__loadView('ajax.award'),compact('data'));
    }

    public function ajaxOurClientHomePage(OurClientService $service)
    {
        $data = [];
        $data['row'] = $service->paginateData(4);
        return view(parent::__loadView('ajax.ourclient'),compact('data'));
    }
}
