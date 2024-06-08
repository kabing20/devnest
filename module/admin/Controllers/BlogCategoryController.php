<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\BlogCategoryService;

class BlogCategoryController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'blogcategory';
    public $base_route = 'blogcategory';
    public $title = 'Blog Category';

    public function __construct(BlogCategoryService $languageService)
    {
        $this->services = $languageService;
    }
}
