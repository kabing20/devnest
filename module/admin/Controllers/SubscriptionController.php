<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\SubscriptionService;

class SubscriptionController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'subscription';
    public $base_route = 'subscription';
    public $title = 'Subscription';

    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->services = $subscriptionService;
    }
}
