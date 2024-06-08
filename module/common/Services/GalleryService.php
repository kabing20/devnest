<?php

namespace Module\Common\Services;

use Module\Common\Repositories\GalleryRepository;
use Module\Common\Repositories\GalleryImageRepository;
use Module\Common\Services;
use Module\Common\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GalleryService
{

    use Services;

    public function __construct(GalleryRepository $repository, GalleryImageRepository $galleryImageRepository)
    {
        $this->repository = $repository;
        $this->galleryImageRepository = $galleryImageRepository;
    }



    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|max:255',


        ];


        if(isset($id)){
            $validateData['image'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';


        }else{
            $validateData['image'] ='required|image|mimes:jpg,png,jpeg,gif,svg,gif';


        }




        $validated = $request->validate($validateData);


    }

    public function updateGallery(Request $request,$id)
    {


        DB::beginTransaction();
        $validateData = [
            'images' => 'required|max:255',
          ];
          $validated = $request->validate($validateData);
        try {

            $fillable = $this->fillable($request);
            // $galleryImages = $this->repository->store($fillable);

            if (isset($request->images) && count($request->images)>0){
                foreach($request->images as $file){
                    $this->galleryImageRepository->store([
                        'gallery_id' => $request->gallery_id,
                        'image' => $this->imageUploadByThumb($file)
                    ]);
                }
            }
            DB::commit();
            return $this->successMessage($this->title.' create successful');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return $this->returnServerError();
        }
    }

    }





