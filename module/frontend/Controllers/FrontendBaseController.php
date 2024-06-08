<?php

namespace Module\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class FrontendBaseController extends Controller
{
    public $theme_path = 'frontendview::theme_one';
    public $view_path = 'crud';
    public $title = "Dashboard";
    public $base_route;

    public function __loadView($view)
    {
        $view = $this->theme_path.'.'.$this->view_path.'.'.$view;
        View::composer($view,function ($view){
            $view->with('theme_path', $this->theme_path);
            $view->with('view_path', $this->theme_path.'.'.$this->view_path);
            $view->with('title', $this->title);
            $view->with('base_route', 'frontend.'.$this->base_route.'.');
        });
        return $view;
    }

    public function returnBack($request)
    {
        if ($request->save) {
            return redirect()->route('frontend.' . $this->base_route . '.index')->with('success', $this->title . ' Update Successful.');
        }
        return redirect()->back()->with('success', $this->title . ' Update Successful.');
    }

}
