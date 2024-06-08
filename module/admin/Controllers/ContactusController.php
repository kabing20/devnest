<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\ContactusService;

class ContactusController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'contactus';
    public $base_route = 'contactus';
    public $title = 'Contact us';

    public function __construct(ContactusService $contactusService)
    {
        $this->services = $contactusService;
    }
}
