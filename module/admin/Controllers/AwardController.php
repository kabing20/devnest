<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\AwardService;

class AwardController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'award';
    public $base_route = 'award';
    public $title = 'Award';

    public function __construct(AwardService $awardService)
    {
        $this->services = $awardService;
    }
}
