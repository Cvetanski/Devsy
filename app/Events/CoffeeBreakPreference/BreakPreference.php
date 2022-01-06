<?php

namespace App\Events\CoffeeBreakPreference;

use App\CoffeeBreakPreference\CoffeeBreakPreference;
use App\StaffMember\StaffMember;

class BreakPreference
{
    private $coffeeBreakPreference;
    private $staffMemberEmail;

    public function __construct(CoffeeBreakPreference $coffeeBreakPreference,StaffMember $staffMemberEmail)
    {
        $this->coffeeBreakPreference = $coffeeBreakPreference;
        $this->staffMemberEmail = $staffMemberEmail;
    }

    public function getCoffeeBreakPreference():CoffeeBreakPreference
    {
        return $this->coffeeBreakPreference;
    }

    public function getStaffMemberEmail():StaffMember
    {
        return $this->staffMemberEmail;
    }
}
