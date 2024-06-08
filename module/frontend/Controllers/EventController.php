<?php

namespace Module\Frontend\Controllers;


use Module\Common\Services\EventService;

class EventController extends FrontendBaseController
{
    public $view_path = 'event';
    public $title = 'Event';

    public function __construct(EventService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        // $data['events'] = $this->service->paginateData(9);
        $data['events']  = $this->service->getAll() ;

        return view(parent::__loadView('index'),compact('data'));
    }

    public function detail($slug)
    {
        $data['latest'] = $this->service->paginateData(4);
        if (!$data['row'] = $this->service->findBy('slug',$slug)){
            abort(404);
        }
        $data['similar'] = $this->service->getBy('event_category_id',$data['row']->event_category_id);

        return view(parent::__loadView('detail'),compact('data'));
    }
}
