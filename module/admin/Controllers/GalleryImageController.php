<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\GalleryImageService;
 
class GalleryImageController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'galleryimage';
    public $base_route = 'galleryimage';
    public $title = 'GalleryImage';

    public function __construct(GalleryImageService $galleryimageService)
    {
        $this->services = $galleryimageService;
    }


}
