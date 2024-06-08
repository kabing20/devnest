<?php

namespace Module\Frontend\Controllers;


use Illuminate\Http\Request;
use Module\Common\Services\ContactusService;

class ContactUsController extends FrontendBaseController
{
    public $view_path = 'contact-us';
    public $title = 'Contact Us';

    public function __construct(ContactusService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view(parent::__loadView('index'));
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'full_name' => 'required|max:100',
            'phone_number' => 'required|min:10|numeric',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'message' => 'required',

        ];


        $validated = $request->validate($validateData);


    }

    public function store(Request $request)
    {
        $this->dataValidation($request);
        $this->service->store($request);
        return redirect()->back()->with('success','Message send successful.');
    }

    public function mailchimp(Request $request)
    {
        \Newsletter::subscribe('santoshthemenepal@yopmail.com');

    }
}
