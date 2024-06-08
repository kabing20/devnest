<?php

namespace Module\Frontend\Composer;

use Illuminate\View\View;
use Module\Common\Services\AffilationService;
use Module\Common\Services\GeneralsettingService;

class ProfileComposer
{
    protected $services;
    protected $affilationService;

    public function __construct(GeneralsettingService $services,AffilationService $affilationService)
    {
        $this->services = $services;
        $this->affilationService = $affilationService;
    }

    public function compose(View $view)
    {
        $view->with('profile', $this->services->getDataInArray());
        $view->with('affilations', $this->affilationService->paginateData(6));
    }
}
