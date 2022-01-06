<?php

use App\CoffeeBreakPreference\CoffeeBreakPreference;

class CoffeeBreakPreferenceSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $coffeeBreakPreference = new CoffeeBreakPreference();
        $coffeeBreakPreference->staff_member_id = 1;
        $coffeeBreakPreference->preferences = [
            'drink'=>['cocaCola','coffee'],
            'food'=>['hamburger','cake'],
        ];

        $coffeeBreakPreference->save();

        $coffeeBreakPreference = new CoffeeBreakPreference();
        $coffeeBreakPreference->staff_member_id = 2;
        $coffeeBreakPreference->preferences = [
            'drink'=>['tea','coffee'],
            'food'=>['steak','french fries'],
        ];

        $coffeeBreakPreference->save();
    }
}
