<?php

namespace Module\Frontend\Controllers;


use Module\Common\Services\AboutUsService;
use Module\Common\Services\AffilationService;
use Module\Common\Services\GalleryImageService;
use Module\Common\Services\TestimonialService;

class AboutUsController extends FrontendBaseController
{
    public $view_path = 'about-us';
    public $title = 'About Us';

    public function __construct(AboutUsService $aboutUsService,AffilationService $affilationService,GalleryImageService $galleryImageService,TestimonialService $testimonialService)
    {
        $this->aboutUsService = $aboutUsService;
        $this->affilationService = $affilationService;
        $this->galleryImageService = $galleryImageService;
        $this->testimonialService = $testimonialService;
    }

    public function index()
    {
        $data['aboutus'] = $this->aboutUsService->first();
        $data['affilation'] = $this->affilationService->paginateData(6);
        $data['images'] = $this->galleryImageService->paginateData(4);
        $data['testimonial'] = $this->testimonialService->getAll();
        return view(parent::__loadView('index'),compact('data'));
    }
}
