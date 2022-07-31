<?php

namespace App\Repositories;

abstract class Repository
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }


    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->model->find($id);

        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }


    public function one($id)
    {
        return $this->model->findOrFail($id);
    }


    public function getModel()
    {
        return $this->model;
    }

    public function datatable()
    {
        return $this->getModel();
    }

    public function where(array $queries, array $searches, ?array $operators = null)
    {
        foreach ($queries as $key => $query) {
            $this->model = $this->model->where($query, $operators[$key] ?? '=', $searches[$key]);
        }
        return $this->model;
    }
}
