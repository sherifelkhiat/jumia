<?php

namespace App\Services;

use App\Models\Country;
use App\Contracts\CustomerServiceContract;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class CustomerService implements CustomerServiceContract
{
    /**
     * Add code, country name and state to customers data
     *
     * @return  Illuminate\Pagination\LengthAwarePaginator
     */
    public function addExtraInfoToCustomerPaginator(LengthAwarePaginator $customers, Array $countries)
    {
        foreach($customers as $customer)
        {
            $code = substr(explode(' ', $customer->phone)[0], 1, -1);

            $country = $countries[$code]['country'];
            
            $customer->code = "+" . $code;

            $customer->country = $country;

            $customer->state = $this->addStateToCustomerList($customer->phone);
        }

        return $customers;
    }

    /**
     * Add code, country name and state to customers data
     *
     * @return  Illuminate\Database\Eloquent\Collection
     */
    public function addExtraInfoToCustomerList(Collection $customers, Array $countries)
    {
        foreach($customers as $customer)
        {
            $code = substr(explode(' ', $customer->phone)[0], 1, -1);

            $country = $countries[$code]['country'];
            
            $customer->code = "+" . $code;

            $customer->country = $country;

            $customer->state = $this->addStateToCustomerList($customer->phone);
        }

        return $customers;
    }

    /**
     * Add state to customer data
     *
     * @return  String
     */
    public function addStateToCustomerList(String $phone)
    {
        if(
            preg_match('/\(237\)\ ?[2368]\d{7,8}$/', $phone) ||
            preg_match('/\(251\)\ ?[1-59]\d{8}$/', $phone) ||
            preg_match('/\(212\)\ ?[5-9]\d{8}$/', $phone) ||
            preg_match('/\(258\)\ ?[28]\d{7,8}$/', $phone) ||
            preg_match('/\(256\)\ ?\d{9}$/', $phone)
        ){
            return "OK";
        } else {
            return "NOK";
        }
    }

    /**
     * Add paginator to customers collection 
     *
     * @return  Illuminate\Pagination\LengthAwarePaginator
     */
    public function paginate($items, $perPage = 15, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, [
            'path' => Paginator::resolveCurrentPath()
        ]);
    }

    /**
     * Filter data inside collection it self 
     *
     * @return  Illuminate\Pagination\LengthAwarePaginator
     */
    public function filterCollection(Collection $customers, int $state)
    {
        $customersFilteredByState = $customers->filter(function ($value, $key) use ($state) {
            if($state == 1)
                return $value->state == 'OK';
            else
                return $value->state == 'NOK';
        });

        return $customersFilteredByState;
    }
}