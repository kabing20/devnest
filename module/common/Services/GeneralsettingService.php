<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Module\Common\Models\Generalsetting;
use Module\Common\Repositories\GeneralsettingRepository;
use Module\Common\Services;

class GeneralsettingService
{

    use Services;

    public function __construct(GeneralsettingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'email' => 'required|max:255',
            'location' => 'required',
            'phone_number' => 'required',
            'facebook' => 'url',
            'twitter' => 'url',
            'linkedin' => 'url',
            'instagram' => 'url',

        ];

        if(isset($id)){
            $validateData['logo'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['footer_logo'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['meta_logo'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['parent_company_logo'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['parent_company_logo_footer'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';

        }else{
            $validateData['logo'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['footer_logo'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['meta_logo'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['parent_company_logo'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['parent_company_logo_footer'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';

        }


        $validated = $request->validate($validateData);


    }

    public function getDataInArray()
    {
        $datas = $this->repository->all();
        $settings = [];
        foreach ($datas as $data) {
            $dataArr = explode('/', $data['value']);
            if (count($dataArr) >= 2 && $dataArr[0] == 'upload') {
                $settings[$data['key']] = asset('storage/300_300/' . $data['value']);
            } else {
                $settings[$data['key']] = $data['value'];
            }
        }
        return $settings;
    }

    public function store(Request $request)
    {

        $allData = $request->only(['email', 'location', 'phone_number', 'google_map', 'facebook', 'twitter', 'linkedin', 'instagram', 'logo','footer_logo','meta_logo', 'parent_company_logo', 'parent_company_logo_footer','get_in_touch']);
        $this->dataValidation($request);
        foreach ($allData as $key => $value) {
            if ($value !== null) {
                if (!in_array($key, ['logo', 'parent_company_logo', 'parent_company_logo_footer','meta_logo','footer_logo'])) {
                    if ($data = Generalsetting::where('key', $key)->first()) {
                        $data->update([
                            'value' => $value
                        ]);
                    } else {
                        Generalsetting::create([
                            'key' => $key,
                            'value' => $value
                        ]);
                    }
                } else {
                    if ($data = Generalsetting::where('key', $key)->first()) {
                        $data->update([
                            'value' => $this->imageUploadByThumb($value)
                        ]);
                    } else {
                        Generalsetting::create([
                            'key' => $key,
                            'value' => $this->imageUploadByThumb($value)
                        ]);
                    }
                }
            }
        }

        return $this->successMessage($this->title . ' create successful');
    }
}
