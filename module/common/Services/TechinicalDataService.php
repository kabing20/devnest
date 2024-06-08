<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Module\Common\Models\TechinicalData;
use Module\Common\Repositories\TechinicalDataRepository;
use Module\Common\Services;

class TechinicalDataService
{

    use Services;

    public function __construct(TechinicalDataRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'description' => 'required',

        ];


        $validated = $request->validate($validateData);


    }

    public function store(Request $request)
    {
        $this->dataValidation($request);
        $fillable = $this->fillable($request);
        if(!$row = TechinicalData::first()){


            $this->repository->store($fillable);
            DB::commit();
            return $this->successMessage($this->title . ' create successful');
        }else{
            $dataTechnical = TechinicalData::first();
            $this->repository->update($dataTechnical->id, $fillable);
            DB::commit();
            return $this->successMessage($this->title . ' update successful.');
        }
    }

}
