<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface CustomerServiceContract
{
    public function addExtraInfoToCustomerPaginator(LengthAwarePaginator $customers, Array $countries);

    public function addExtraInfoToCustomerList(Collection $customers, Array $coutries);

    public function addStateToCustomerList(String $phone);

    public function paginate($items, $perPage = 15, $page = null);

    public function filterCollection(Collection $customers, int $state);
}
