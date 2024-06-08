<?php

namespace Module\Common\Services;

use Module\Common\Repositories\BlogCategoryRepository;
use Module\Common\Services;
use Illuminate\Http\Request;
class BlogCategoryService
{

    use Services;

    public function __construct(BlogCategoryRepository $repository)
    {
        $this->repository = $repository;
    }


    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|unique:blog_categories,title,'.$id.'|max:255'

        ];

        // if(isset($id)){
        //     $validateData['image'] = 'nullable';

        // }else{
        //     $validateData['image'] = 'required';

        // }

        $validated = $request->validate($validateData);


    }

}
