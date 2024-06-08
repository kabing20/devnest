<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\UserService;

class UserController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'user';
    public $base_route = 'user';
    public $title = 'User';

    public function __construct(UserService $userService)
    {
        $this->services = $userService;
    }


}
