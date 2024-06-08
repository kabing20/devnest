<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Module\Common\Repositories\TestimonialRepository;
use Module\Common\Services;

class TestimonialService
{

    use Services;

    public function __construct(TestimonialRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'name' => 'required',

            'position' => 'required',
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
