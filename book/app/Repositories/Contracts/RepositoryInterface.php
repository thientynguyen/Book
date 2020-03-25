<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    /**
     * Get all
     * @return mixed
     */
    public function getAll();

    /**
     * Get one
     * @param int $id
     * @return mixed
     */
    public function find($id);

    /**
     * Get one
     * @param int $id
     * @return mixed
     */
    public function findOrFail($id);

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * Update
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, array $attributes);

    /**
     * Delete
     * @param int $id
     * @return mixed
     */
    public function delete($id);
}
