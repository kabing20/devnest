<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Module\Common\Repositories\TechnicaldataImageRepository;
use Module\Common\Services;

class TechnicaldataImageService
{

    use Services;

    public function __construct(TechnicaldataImageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [

        ];

        if(isset($id)){
            $validateData['image'] = 'required|image|mimes:jpg,png,jpeg,gif,svg,gif';

        }else{
            $validateData['image'] = 'required|image|mimes:jpg,png,jpeg,gif,svg,gif';

        }

        $validated = $request->validate($validateData);


    }
}
