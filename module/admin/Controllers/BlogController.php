<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\BlogCategoryService;
use Module\Common\Services\BlogService;

class BlogController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'blog';
    public $base_route = 'blog';
    public $title = 'Blog';

    public function __construct(BlogService $languageService)
    {
        $this->services = $languageService;
    }

    public function create(BlogCategoryService $category)
    {
        $data['blog-categories'] = $category->getAll();
        return view(parent::__loadView('create'),compact('data'));
    }

    public function edit(BlogCategoryService $category, $id)
    {
        $row = $this->services->findById($id);
        $data['blog-categories'] = $category->getAll();
        return view(parent::__loadView('edit'), compact('row','data'));
    }
}
