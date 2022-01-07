<?php

namespace App\CoffeeBreakPreference\Commands;

use App\CoffeeBreakPreference\CoffeeBreakPreference;
use App\CoffeeBreakPreference\Repositories\Contract\CoffeeBreakPreferenceRepositoryInterface;
use App\StaffMember\StaffMember;

class ListCoffeeBreakPreferenceCommand
{
    private $staffMember;

    private $preferences;

    public function __construct(StaffMember $staffMember,CoffeeBreakPreference $preferences)
    {
        $this->staffMember = $staffMember;
        $this->preferences = $preferences;
    }

}
