<?php

namespace App\Repositories;

use App\Contracts\RepositoryContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
/**
 * Class BaseRepository
 *
 * @package \App\Repositories
 */
class Repository implements RepositoryContract
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * Repository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc')
    {
        return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }
}
