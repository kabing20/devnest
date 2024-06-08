<?php

namespace Module\Admin\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Module\Common\CrudController;
use Module\Common\Models\TechinicalData;
use Module\Common\Services\TechinicalDataService;

class TechinicalDataController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'techinicaldata';
    public $base_route = 'techinicaldata';
    public $title = 'techinical Data';

    public function __construct(TechinicalDataService $techinicaldataService)
    {
        $this->services = $techinicaldataService;
    }

    public function create()
    {
        $row = TechinicalData::first();
        return view(parent::__loadView('create'), compact('row'));
    }




}
