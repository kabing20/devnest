<?php

namespace Module\Common;

use Illuminate\Foundation\Application;

abstract class Repository implements RepositoryInterface
{
    protected $model;

    public function __construct(Application $app)
    {
        $this->model = $this->makeModel($app);
    }

    abstract function getModel();

    protected function makeModel($app)
    {
        return $app->make($this->getModel());
    }

    public function all($columns = array('*'))
    {
        return $this->model->all($columns);
    }

    public function paginate($limit,$columns = array('*'))
    {
        return $this->model->select($columns)->paginate($limit);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function delete($id)
    {
        $data = $this->model->find($id);
        return $this->model->find($id)->delete();
    }

    public function find($id, $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }

    public function first($columns = array('*'))
    {
        return $this->model->first($columns);
    }

    public function findOrFail($id, $columns = array('*'))
    {
        return $this->model->findOrFail($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*'))
    {
        if (!$data = $this->model->where($attribute, '=', $value)->first($columns)){
            abort(404);
        }
        return $data;
    }

    public function findByOrFail($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->firstorfail($columns);
    }

    public function getBy($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->get($columns);
    }

    public function getByLimit($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->get($columns);
    }

}
