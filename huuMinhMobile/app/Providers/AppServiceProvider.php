<?php

namespace App\Providers;

use App\Http\Repository\Eloquent\PhoneEloquentRepository;
use App\Http\Repository\PhoneRepositoryInterface;
use App\Http\Services\Impl\PhoneServices;
use App\Http\Services\PhoneServicesInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PhoneRepositoryInterface::class,PhoneEloquentRepository::class);
        $this->app->singleton(PhoneServicesInterface::class,PhoneServices::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
