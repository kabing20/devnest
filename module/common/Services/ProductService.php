<?php

namespace Module\Common\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Module\Common\Repositories\ProductImageRepository;
use Module\Common\Repositories\ProductRepository;
use Module\Common\Services;

class ProductService
{

    use Services;

    public function __construct(ProductRepository $repository, ProductImageRepository $productFileRepository)
    {
        $this->repository = $repository;
        $this->productFileRepository = $productFileRepository;
    }


    public function dataValidation(Request $request,$id=null)
    {

        $validateData = [
            'title' => 'required|max:255',

            'product_category_id' => 'required',
            'description' => 'required',
            'short_description' => 'required',

        ];

        if(isset($id)){
            $validateData['image'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['images.*'] = 'image|mimes:jpg,png,jpeg,gif,svg,gif';

        }else{
            $validateData['image'] = 'required|image|mimes:jpg,png,jpeg,gif,svg,gif';
            $validateData['images.*'] = 'required|image|mimes:jpg,png,jpeg,gif,svg,gif';

        }

        $validated = $request->validate($validateData);


    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $this->dataValidation($request);
        try {

            $fillable = $this->fillable($request);
            $product = $this->repository->store($fillable);

            if (isset($request->images) && count($request->images)>0){
                foreach($request->images as $file){
                    $this->productFileRepository->store([
                        'product_id' => $product->id,
                        'image' => $this->imageUploadByThumb($file)
                    ]);
                }
            }
            DB::commit();
            return $this->successMessage($this->title.' create successful');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return $this->returnServerError();
        }
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        $this->dataValidation($request, $id);
        try {
            $fillable = $this->fillable($request);

            $product = $this->repository->update($id, $fillable);
            if (isset($request->images) && count($request->images)>0){
                foreach($request->images as $file){
                    $this->productFileRepository->store([
                        'product_id' => $id,
                        'image' => $this->imageUploadByThumb($file)
                    ]);
                }
            }
            DB::commit();
            return $this->successMessage($this->title . ' update successful.');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return $this->returnServerError();
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

        if (isset($all['file'])) {
            $all['file'] = $this->uploadFile($all['file']);
        }


        return $all;
    }



}
