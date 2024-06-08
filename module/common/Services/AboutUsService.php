<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Module\Common\Models\AboutUs;
use Module\Common\Models\HomeSlider;
use Module\Common\Repositories\AboutUsRepository;
use Module\Common\Services;

class AboutUsService
{

    use Services;

    public function __construct(AboutUsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request, $id = null)
    {



        $validateData = [
            'description' => 'required',
            'best_choice_description' => 'required',

            'goal_description' => 'required',
            'best_choice_title' => 'required',
            'video_banner_url' => 'required',
            'video_banner_url' => 'url',

        ];


        $validated = $request->validate($validateData);


    }

    public function store(Request $request)
    {

        $this->dataValidation($request);

        $fillable = $this->fillable($request);

        if(!$row = AboutUs::first()){


            $this->repository->store($fillable);
            DB::commit();
            return $this->successMessage($this->title . ' create successful');
        }else{
            $aboutus = AboutUs::first();
            $this->repository->update($aboutus->id, $fillable);
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

        if (isset($all['best_choice_image'])) {
            $all['best_choice_image'] = $this->imageUploadByThumb($all['best_choice_image']);
        }

        if (isset($all['video_banner_thumb'])) {

            $all['video_banner_thumb'] = $this->imageUploadByThumb($all['video_banner_thumb']);
        }

        return $all;
    }

}
