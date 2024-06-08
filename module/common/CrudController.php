<?php

namespace Module\Common;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait CrudController
{
    private $services;

    public function index()
    {
        $data = [];
        $data['rows'] = $this->services->paginateData();
        return view(parent::__loadView('index'),compact('data'));
    }

    public function create()
    {
        return view(parent::__loadView('create'));
    }

    public function store(Request $request)
    {
        $response = $this->services->store($request);
        return $this->returnBack($response,$request);
    }

    public function show($id)
    {

        $row = $this->services->findById($id);
        return view(parent::__loadView('show'), compact('row'));
    }

    public function edit($id)
    {
        $row = $this->services->findById($id);
        return view(parent::__loadView('edit'), compact('row'));
    }

    public function update(Request $request,$id)
    {
        $response = $this->services->update($request,$id);
        return $this->returnBack($response,$request);
    }

    public function destroy($id)
    {
        $this->services->delete($id);
        return redirect()->back()->with('success', $this->title . ' Delete Successful.');
    }
}
