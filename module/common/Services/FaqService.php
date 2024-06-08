<?php

namespace Module\Common\Services;
use Illuminate\Http\Request;
use Module\Common\Repositories\FaqRepository;
use Module\Common\Services;

class FaqService
{

    use Services;

    public function __construct(FaqRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|max:255',
            'description' => 'required',


        ];


        $validated = $request->validate($validateData);


    }
}
