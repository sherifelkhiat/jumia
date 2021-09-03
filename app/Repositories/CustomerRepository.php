<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Contracts\CustomerContract;
use App\Contracts\CustomerServiceContract;

class CustomerRepository extends Repository implements CustomerContract
{
    private $customerService;

    /**
     * Create a new customer repository instance.
     *
     * @return void
     */
    public function __construct(Customer $model, CustomerServiceContract $customerService)
    {
        parent::__construct($model);

        $this->model = $model;

        $this->customerService = $customerService;
    }

    /**
     * Get all customers numbers and data
     *
     * @return  Illuminate\Pagination\LengthAwarePaginator
     */
    public function getAllCustomers($columns = array('*'), Array $countries)
    {
        $customers = $this->model::select($columns)->paginate(10);

        $customersWithCodeAndCountryAndState = $this->customerService->addExtraInfoToCustomerPaginator($customers, $countries);

        return $customersWithCodeAndCountryAndState;

    }

    /**
     * Filter customers numbers and data
     *
     * @return  Illuminate\Pagination\LengthAwarePaginator
     */
    public function filterCustomers(Request $request, $countries, $columns = array('*'))
    {
        if($request->has('country') && $request->has('state')) {
            $countryCode = "(" . $request->get('country') . ")";

            $state = $request->get('state');

            $customersFilteredByCode = $this->model::select($columns)->where(\DB::raw('substr(phone, 1, 5)'), '=', $countryCode)->get();

            $customersWithCodeAndCountryAndState = $this->customerService->addExtraInfoToCustomerList($customersFilteredByCode, $countries);

            $customersFilteredByCodeAndState = $this->customerService->filterCollection($customersWithCodeAndCountryAndState, $state);

            $customersFilteredByCodeAndStatePagination = $this->customerService->paginate($customersFilteredByCodeAndState, 5);

            return $customersFilteredByCodeAndStatePagination;
        }

        if($request->has('country')) {
            $countryCode = "(" . $request->get('country') . ")";

            $customersFilteredByCode = $this->model->where(\DB::raw('substr(phone, 1, 5)'), '=', $countryCode)->paginate(5);

            $customersWithCodeAndCountryAndState = $this->customerService->addExtraInfoToCustomerPaginator($customersFilteredByCode, $countries);

            return $customersWithCodeAndCountryAndState;
        }

        if($request->has('state')){
            $state = $request->get('state');

            $customers = $this->model::select($columns)->get();

            $customersWithCodeAndCountryAndState = $this->customerService->addExtraInfoToCustomerList($customers, $countries);

            $customersFilteredByCodeAndState = $this->customerService->filterCollection($customersWithCodeAndCountryAndState, $state);

            $customersFilteredByCodeAndStatePagination = $this->customerService->paginate($customersFilteredByCodeAndState, 5);

            return $customersFilteredByCodeAndStatePagination;
        }

        return $this->getAllCustomers($columns, $countries);
    }
}