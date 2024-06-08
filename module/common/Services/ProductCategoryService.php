<?php

namespace Module\Common\Services;

use Module\Common\Repositories\ProductCategoryRepository;
use Module\Common\Services;
use Illuminate\Http\Request;
class ProductCategoryService
{

    use Services;

    public function __construct(ProductCategoryRepository $repository)
    {
        $this->repository = $repository;
    }


    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|unique:product_categories,title,'.$id.'|max:255'

        ];

        // if(isset($id)){
        //     $validateData['image'] = 'nullable';

        // }else{
        //     $validateData['image'] = 'required';

        // }

        $validated = $request->validate($validateData);


    }
}
