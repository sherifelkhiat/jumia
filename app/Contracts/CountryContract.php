<?php

namespace App\Contracts;

interface CountryContract extends RepositoryContract
{
    public function getAllCountries($columns = array('*'));
}
