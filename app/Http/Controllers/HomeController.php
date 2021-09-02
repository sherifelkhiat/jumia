<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\CountryContract;
use App\Contracts\CustomerContract;

class HomeController extends Controller
{
    private $countryRepository;

    private $customerRepository;

    private $countries;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CountryContract $countryRepository, CustomerContract $customerRepository)
    {
        $this->countryRepository = $countryRepository;

        $this->customerRepository = $customerRepository;

        $this->countries = $this->countryRepository->getAllCountries(['code', 'country']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customersWithCodeAndCountryAndState = $this->customerRepository->getAllCustomers(['name', 'phone'], $this->countries);

        return view('home', compact('customersWithCodeAndCountryAndState'))->with('countries', $this->countries);
    }

    /**
     * Show phone numbers filter result.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function filter(Request $request)
    {
        $queryParams = $request->except(['page']);

        $customersWithCodeAndCountryAndState = $this->customerRepository->filterCustomers($request, $this->countries, ['name', 'phone']);

        return view('home', compact('customersWithCodeAndCountryAndState', 'queryParams'))->with('countries', $this->countries);
    }
}
