<?php

namespace Module\Frontend\Controllers;


use Illuminate\Http\Request;

use Module\Common\Services\SubscriptionService;

class SubscriptionController extends FrontendBaseController
{

    public $view_path = 'subscription';

    public $title = 'Subscription';


    public function __construct(SubscriptionService $service)
    {
        $this->service = $service;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [

            'subscribe_email' => 'required|unique:subscriptions|regex:/(.+)@(.+)\.(.+)/i',


        ];


        $validated = $request->validate($validateData);


    }

    public function store(Request $request)
    {

        $this->dataValidation($request);
        $this->service->store($request);

        return redirect()->route('frontend.home.index')->with('success','Subscribed successfully.');
    }
}
