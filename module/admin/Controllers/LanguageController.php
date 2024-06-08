<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\LanguageService;

class LanguageController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'language';
    public $base_route = 'language';
    public $title = 'Language';

    public function __construct(LanguageService $languageService)
    {
        $this->services = $languageService;
    }
}
