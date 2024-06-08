<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\ProductCategoryService;

class ProductCategoryController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'productcategory';
    public $base_route = 'productcategory';
    public $title = 'Product Category';

    public function __construct(ProductCategoryService $languageService)
    {
        $this->services = $languageService;
    }
}
