<?php

namespace Module\Admin\Controllers;

use Illuminate\Support\Facades\Request;
use Module\Common\CrudController;
use Module\Common\Models\ProductImage;
use Module\Common\Services\ProductService;
use Module\Common\Services\ProductCategoryService;

class ProductController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'product';
    public $base_route = 'product';
    public $title = 'Product';

    public function __construct(ProductService $languageService)
    {
        $this->services = $languageService;
    }

    public function deleteProductImagess(Request $request,$id){

        ProductImage::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }


    public function create(ProductCategoryService $category)
    {
        $data['product-categories'] = $category->getAll();
        return view(parent::__loadView('create'),compact('data'));
    }

    public function edit(ProductCategoryService $category, $id)
    {

        $row = $this->services->findById($id);
        $data['product-categories'] = $category->getAll();
        return view(parent::__loadView('edit'), compact('row','data'));
    }
}

