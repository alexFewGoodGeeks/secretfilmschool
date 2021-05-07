<?php


namespace App\Repositories;


class MasterRepository
{
    /**
     * @var $model Model
     */
    protected $model;

    public function all($paginate=false)
    {

        return $paginate ? $this->model::paginate() : $this->model::all();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model::create($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->model::find($id);
    }

    /**
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update(int $id,array $data)
    {
        $item = $this->findById($id);
        $item->fill($data);

        return $item->save();
    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        $this->model::destroy($id);
    }
}
