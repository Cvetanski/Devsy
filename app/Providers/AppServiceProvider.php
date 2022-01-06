<?php

namespace App\Providers;

use App\CoffeeBreakPreference\Repositories\Contract\CoffeeBreakPreferenceRepositoryInterface;
use App\CoffeeBreakPreference\Repositories\EloquentCoffeeBreakPreferenceRepository;
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
        $this->app->bind(
            CoffeeBreakPreferenceRepositoryInterface::class,
            EloquentCoffeeBreakPreferenceRepository::class
        );
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
