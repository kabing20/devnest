<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\EventCategoryService;

class EventCategoryController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'eventcategory';
    public $base_route = 'eventcategory';
    public $title = 'Event Category';

    public function __construct(EventCategoryService $eventcategoryService)
    {
        $this->services = $eventcategoryService;
    }
}
