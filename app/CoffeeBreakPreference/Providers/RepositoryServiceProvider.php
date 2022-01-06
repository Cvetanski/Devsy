<?php

namespace App\CoffeeBreakPreference\Providers;

use App\CoffeeBreakPreference\Repositories\Contract\CoffeeBreakPreferenceRepositoryInterface;
use App\CoffeeBreakPreference\Repositories\EloquentCoffeeBreakPreferenceRepository;
use Illuminate\Support\ServiceProvider;
use App\Providers;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            CoffeeBreakPreferenceRepositoryInterface::class,
            EloquentCoffeeBreakPreferenceRepository::class
        );
    }
}
