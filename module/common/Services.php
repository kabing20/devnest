<?php

namespace Module\Common;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait Services
{
    use ApiReturnJsonMessages, ImageUpload;

    private $repository;
    private $title;

    public function getAll()
    {
        return $this->repository->all();
    }

    public function paginateData($count = 10)
    {
        return $this->repository->paginate($count);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $this->dataValidation($request);
        try {
            $fillable = $this->fillable($request);

            $this->repository->store($fillable);
            DB::commit();
            return $this->successMessage($this->title . ' create successful');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return $this->returnServerError();
        }
    }

    public function findById($id)
    {
        $bed = $this->repository->findOrFail($id);
        return $bed;
    }
    public function first()
    {
        $bed = $this->repository->first();
        return $bed;
    }

    public function findBy($attribute,$value)
    {
        $bed = $this->repository->findBy($attribute,$value);
        return $bed;
    }

    public function getBy($attribute,$value)
    {
        $bed = $this->repository->getBy($attribute,$value);
        return $bed;
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        $this->dataValidation($request, $id);
        try {
            $fillable = $this->fillable($request);
            $this->repository->update($id, $fillable);
            DB::commit();
            return $this->successMessage($this->title . ' update successful.');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return $this->returnServerError();
        }
    }

    public function delete($id)
    {
    
        DB::beginTransaction();
        try {
            $this->repository->delete($id);
            DB::commit();
            return $this->successMessage($this->title . ' delete successful.');
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->returnServerError();
        }
    }

    public function dataValidation(Request $request, $id = null)
    {
        $request->validate([]);
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

        return $all;
    }
}
