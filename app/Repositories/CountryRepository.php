<?php

namespace App\Repositories;

use App\Models\Country;
use App\Contracts\CountryContract;

class CountryRepository extends Repository implements CountryContract
{
    /**
     * Create a new country repository instance.
     *
     * @return void
     */
    public function __construct(Country $model)
    {
        parent::__construct($model);

        $this->model = $model;
    }

    /**
     * Get all countries data
     *
     * @return  Array
     */
    public function getAllCountries($columns = array('*'))
    {
        return $this->model::select($columns)->get()->keyBy('code')->toArray();
    }
}