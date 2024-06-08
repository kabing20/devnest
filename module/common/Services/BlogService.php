<?php

namespace Module\Common\Services;
use Illuminate\Http\Request;
use Module\Common\Repositories\BlogRepository;
use Module\Common\Services;

class BlogService
{
    use Services;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|max:255',

            'blog_category_id' => 'required',
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
