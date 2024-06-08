<?php

namespace Module\Frontend\Controllers;


use Module\Common\Services\ProductService;

class ProductController extends FrontendBaseController
{
    public $view_path = 'product';
    public $title = 'Product';

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        // $data['products'] = $this->service->paginateData(20);
        $data['products'] = $this->service->getAll();
        return view(parent::__loadView('index'),compact('data'));
    }

    public function detail($slug)
    {
        if (!$data['row'] = $this->service->findBy('slug',$slug)){
            abort(404);
        }
        $data['similar'] = $this->service->getBy('product_category_id',$data['row']->product_category_id);
        return view(parent::__loadView('detail'),compact('data'));
    }
}
