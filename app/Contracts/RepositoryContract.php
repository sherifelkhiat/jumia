<?php

namespace App\Contracts;

interface RepositoryContract
{
    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc');
}
