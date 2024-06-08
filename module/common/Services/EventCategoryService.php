<?php

namespace Module\Common\Services;

use Module\Common\Repositories\EventCategoryRepository;
use Module\Common\Services;

use Illuminate\Http\Request;
class EventCategoryService
{

    use Services;

    public function __construct(EventCategoryRepository $repository)
    {
        $this->repository = $repository;
    }


    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|unique:event_categories,title,'.$id.'|max:255'

        ];

        $validated = $request->validate($validateData);


    }
}
