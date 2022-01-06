<?php

namespace App\CoffeeBreakPreference\Repositories;

use App\CoffeeBreakPreference\CoffeeBreakPreference;
use App\CoffeeBreakPreference\Repositories\Contract\CoffeeBreakPreferenceRepositoryInterface;
use Carbon\Carbon;

class EloquentCoffeeBreakPreferenceRepository implements CoffeeBreakPreferenceRepositoryInterface
{
    public function all():array
    {
        return CoffeeBreakPreference::whereDate('created_at',Carbon::today())->get()->all();
    }
}
