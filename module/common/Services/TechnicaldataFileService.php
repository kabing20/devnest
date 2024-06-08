<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Module\Common\Repositories\TechnicaldataFileRepository;
use Module\Common\Services;

class TechnicaldataFileService
{

    use Services;

    public function __construct(TechnicaldataFileRepository $repository)
    {
        $this->repository = $repository;
    }



    public function fillable(Request $request, $row = null)
    {


        $all = $request->all();

        unset($all['_token']);
        if (isset($all['_method'])) {
            unset($all['_method']);
        }

        if (isset($all['image'])) {
            $all['image'] = $this->imageUploadByThumb($all['image']);
        }

        if (isset($all['file'])) {
            $all['file'] = $this->uploadFile($all['file']);
        }

        $all['techinical_data_id'] = '1';

        return $all;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|max:255',

            'short_description' => 'required',

        ];

        if(isset($id)){
            $validateData['image'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['file'] = 'nullable';

        }else{
            $validateData['image'] = 'required|image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['file'] = 'required';
        }

        $validated = $request->validate($validateData);


    }
}
