<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\FaqService;

class FaqController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'faq';
    public $base_route = 'faq';
    public $title = 'Faq';

    public function __construct(FaqService $faqService)
    {
        $this->services = $faqService;
    }
}
