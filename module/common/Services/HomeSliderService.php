<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Module\Common\Models\HomeSlider;
use Module\Common\Models\TechinicalData;
use Module\Common\Repositories\HomeSliderRepository;
use Module\Common\Services;

class HomeSliderService
{

    use Services;

    public function __construct(HomeSliderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'short_description' => 'required',

        ];


        $validated = $request->validate($validateData);


    }

    public function store(Request $request)
    {
        $this->dataValidation($request);
        $fillable = $this->fillable($request);

        if(!$row = HomeSlider::first()){


            $this->repository->store($fillable);
            DB::commit();
            return $this->successMessage($this->title . ' create successful');
        }else{
            $homeslider = HomeSlider::first();
            $this->repository->update($homeslider->id, $fillable);

            DB::commit();
            return $this->successMessage($this->title . ' update successful.');
        }
    }

    public function fillable(Request $request, $row = null)
    {
        $all = $request->all();

        unset($all['_token']);
        if (isset($all['_method'])) {
            unset($all['_method']);
        }
        if (isset($all['image'])) {
            $all['image'] = $this->imageUploadByThumb($all['image']);
        }


        if (isset($all['background'])) {
            $all['background'] = $this->imageUploadByThumb($all['background']);
        }


        return $all;
    }

}
