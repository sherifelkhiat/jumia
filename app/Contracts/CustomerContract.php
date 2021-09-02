<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface CustomerContract extends RepositoryContract
{
    public function getAllCustomers($columns = array('*'), Array $countries);

    public function filterCustomers(Request $request, $countries, $columns = array('*'));
}
