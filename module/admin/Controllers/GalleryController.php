<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\GalleryService;
use Illuminate\Http\Request;
use Module\Common\Models\GalleryImage;
class GalleryController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'gallery';
    public $base_route = 'gallery';
    public $title = 'Gallery';

    public function __construct(GalleryService $galleryService)
    {
        $this->services = $galleryService;
    }

    public function deleteGalleryImages(Request $request,$id){

        GalleryImage::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }




    public function show($id)
    {

        $row = $this->services->findById($id);

        $images = $row->images;

        return view(parent::__loadView('images'), compact('row','images'));
    }


    public function updadeImages(Request $request,$id)
    {

        $response = $this->services->updateGallery($request,$id);
        return $this->returnBack($response,$request);
    }




}
