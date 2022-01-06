<?php

namespace App\Mail;

use App\CoffeeBreakPreference\CoffeeBreakPreference;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CoffeeBreakPreferencesNotification extends Mailable
{
    use Queueable, SerializesModels;

    private $coffeeBreakPreference;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CoffeeBreakPreference $coffeeBreakPreference)
    {
        $this->coffeeBreakPreference = $coffeeBreakPreference;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->view('coffee_break_preference_mail', ['coffeeBreakPreference' => $this->coffeeBreakPreference])
            ->subject('Your Coffee Break Preference For Today');
    }

}
