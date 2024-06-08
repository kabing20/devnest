<?php

namespace Module\Frontend\Controllers;


use Module\Common\Services\BlogService;

class BlogController extends FrontendBaseController
{
    public $view_path = 'blog';
    public $title = 'Blog';

    public function __construct(BlogService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        // $data['blogs'] = $this->service->paginateData(9);
        $data['blogs'] = $this->service->getAll();
        return view(parent::__loadView('index'),compact('data'));
    }

    public function detail($slug)
    {
        $data['latest'] = $this->service->paginateData(4);
        if (!$data['row'] = $this->service->findBy('slug',$slug)){
            abort(404);
        }
        $data['similar'] = $this->service->getBy('blog_category_id',$data['row']->blog_category_id);

        return view(parent::__loadView('detail'),compact('data'));
    }
}
