<?php

namespace Module\Frontend\Controllers;


use Module\Common\Models\Gallery;
use Module\Common\Services\GalleryImageService;
use Module\Common\Services\GalleryService;

class GalleryController extends FrontendBaseController
{
    public $view_path = 'gallery';
    public $title = 'Gallery';

    public function __construct(GalleryService $galleryServices,GalleryImageService $galleryImageService)
    {
        $this->galleryServices = $galleryServices;
        $this->galleryImageService = $galleryImageService;
    }

    public function index()
    {
        $data['galleries'] = $this->galleryServices->getAll();
        return view(parent::__loadView('index'),compact('data'));
    }

    public function detail($slug)
    {
        $data['gallery'] = $this->galleryServices->findBy('slug',$slug);
        $data['images'] = $this->galleryImageService->getBy('gallery_id',$data['gallery']->id);

        return view(parent::__loadView('detail'),compact('data'));
    }
}
