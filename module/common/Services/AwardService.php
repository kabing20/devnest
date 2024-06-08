<?php

namespace Module\Common\Services;

use Module\Common\Repositories\AwardRepository;
use Module\Common\Services;
use Illuminate\Http\Request;
class AwardService
{

    use Services;

    public function __construct(AwardRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|max:255',

            'description' => 'required',

        ];

        if(isset($id)){
            $validateData['image'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';

        }else{
            $validateData['image'] = 'required|image|mimes:jpg,png,jpeg,gif,svg,gif';

        }

        $validated = $request->validate($validateData);


    }
}
