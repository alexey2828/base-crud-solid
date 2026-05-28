<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface RepositoryInterface
{
    /**
     * Get all records
     *
     * @return Collection
     */
    public function all(): Collection;
    
    /**
     * Find record by ID
     *
     * @param int $id
     * @return mixed
     */
    public function find(int $id);
    
    /**
     * Create new record
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data);
    
    /**
     * Update record
     *
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update(int $id, array $data);
    
    /**
     * Delete record
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;
}