<?php

namespace Module\Admin\Controllers;
use Module\Common\Models\Product;
use Module\Common\Models\Blog;
use Module\Common\Models\Event;
use Module\Common\Models\Award;

class DashboardController extends AdminBaseController
{
    public $view_path = 'dashboard';

    public function __construct()
    {
        //
    }

    public function index()
    {

        $products = Product::select('id')->count();
        $blogs = Blog::select('id')->count();
        $events = Event::select('id')->count();
        $awards = Award::select('id')->count();
        return view(parent::__loadView('index'),compact('blogs','products','events','awards'));
    }
}
