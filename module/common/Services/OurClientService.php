<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Module\Common\Repositories\OurClientRepository;
use Module\Common\Services;

class OurClientService
{

    use Services;

    public function __construct(OurClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {


        $validateData = [

            'description' => 'required',
            'view_more' => 'required|url',

        ];

        $customMessages = [
            'view_more.required' => 'Url field is required.',
            'view_more.unique' => 'The link has already been taken.'
        ];

        if(isset($id)){
            $validateData['image'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['title'] = 'required';

        }else{
            $validateData['image'] = 'required|image|mimes:jpg,png,jpeg,gif,svg,gif';

            $validateData['title'] = 'required|max:255|unique:our_clients';
        }

        $validated = $request->validate($validateData,$customMessages);


    }
}
