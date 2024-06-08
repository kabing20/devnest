<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Module\Common\Repositories\AffilationRepository;
use Module\Common\Services;

class AffilationService
{

    use Services;

    public function __construct(AffilationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [




        ];

        if(isset($id)){
            $validateData['image'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';

        }else{
            $validateData['image'] = 'required|image|mimes:jpg,png,jpeg,gif,svg,gif';

        }

        $validated = $request->validate($validateData);


    }
}
