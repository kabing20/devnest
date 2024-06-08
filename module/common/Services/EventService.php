<?php

namespace Module\Common\Services;
use Illuminate\Http\Request;
use Module\Common\Repositories\EventRepository;
use Module\Common\Services;

class EventService
{

    use Services;

    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|max:255',

            'event_category_id' => 'required',
            'inaguration' => 'required',
            'location' => 'required',
            'description' => 'required',
            'date' => 'required',
        ];

        if(isset($id)){
            $validateData['image'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
        }else{
            $validateData['image'] = 'required|image|mimes:jpg,png,jpeg,gif,svg,gif';

        }

        $validated = $request->validate($validateData);


    }
}
