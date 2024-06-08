<?php
namespace Module\Common;

interface RepositoryInterface
{
    public function all($columns = array('*'));

    public function paginate($limit);

    public function store(array $data);

    public function update($id,array $data);

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function first($columns = array('*'));

    public function findOrFail($id, $columns = array('*'));

    public function findBy($attribute,$value,$columns = array('*'));

    public function findByOrFail($attribute,$value,$columns = array('*'));

}
