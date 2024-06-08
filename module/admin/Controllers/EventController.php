<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\EventCategoryService;
use Module\Common\Services\EventService;

class EventController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'event';
    public $base_route = 'event';
    public $title = 'Event';

    public function __construct(EventService $eventService)
    {
        $this->services = $eventService;
    }

    public function create(EventCategoryService $category)
    {
        $data['event-categories'] = $category->getAll();
        return view(parent::__loadView('create'),compact('data'));
    }

    public function edit(EventCategoryService $category, $id)
    {
        $row = $this->services->findById($id);
        $data['event-categories'] = $category->getAll();
        return view(parent::__loadView('edit'), compact('row','data'));
    }
}
