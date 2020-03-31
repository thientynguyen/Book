<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

abstract class EloquentRepository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $_model;

    /**
     * EloquentRepository constructor.
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * Get model
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->_model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get All
     * @return Collection|static[]
     */
    public function getAll()
    {
        return $this->_model->all();
    }

    /**
     * Get one
     * @param int $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->_model->find($id);
        return $result;
    }

    /**
     * Get one
     * @param int $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        $result = $this->_model->findOrFail($id);

        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->_model->create($attributes);
    }

    /**
     * Update
     * @param int $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    /**
     * Delete
     *
     * @param int $id
     * @return bool
     */
    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }

    public function paginate($numberPage)
    {
        $result = $this->_model->paginate($numberPage);
        $this->setModel();

        return $result;
    }

    public function get()
    {
        $result = $this->_model->get();
        $this->setModel();

        return $result;
    }

    public function getColunms($columns = ['*'])
    {
        $result = $this->_model->get($columns);
        $this->setModel();

        return $result;
    }

    public function where($column, $condition, $value)
    {
        $this->_model = $this->_model->where($column, $condition, $value);

        return $this;
    }

    public function setQueriesBuilder()
    {
        $this->_model = $this->_model->newQuery();

        return $this;
    }

    public function exicuteBuilder($sql, $params = [])
    {
        return $this->_model->select(\DB::raw($sql), $params);
    }

    public function getDemo()
    {
        return $this->_model;
    }
}
