<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\CountryContract;
use App\Repositories\CountryRepository;
use App\Contracts\CustomerContract;
use App\Repositories\CustomerRepository;
use App\Contracts\CustomerServiceContract;
use App\Services\CustomerService;

class RepositoryServiceProvider extends ServiceProvider
{

    protected $repositories = [
        CountryContract::class => CountryRepository::class,
        CustomerContract::class => CustomerRepository::class,
        CustomerServiceContract::class => CustomerService::class        
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    }
}
