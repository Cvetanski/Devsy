<?php

namespace App\Listeners;

use App\Events\CoffeeBreakPreference\BreakPreference;

class SendCoffeeBreakPreferenceEmailToStaffMember
{
    public function handle(BreakPreference $event)
    {
        Mail::to($event->getCoffeeBreakPreference()->getEmail())->send(new LoanDeclinedNotificationEmail($event->getCoffeeBreakPreference()));
    }

}
