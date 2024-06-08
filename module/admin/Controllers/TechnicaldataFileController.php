<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Models\TechinicalData;
use Module\Common\Models\TechnicaldataFile;
use Module\Common\Services\TechnicaldataFileService;

class TechnicaldataFileController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'technicaldatafile';
    public $base_route = 'technicaldatafile';
    public $title = 'Technicaldata File';

    public function __construct(TechnicaldataFileService $technicaldatafileService)
    {
        $this->services = $technicaldatafileService;
    }

}
