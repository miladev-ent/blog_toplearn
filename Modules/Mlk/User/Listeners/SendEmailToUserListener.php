<?php

namespace Mlk\User\Listeners;

use Illuminate\Support\Facades\Mail;
use Mlk\User\Mail\SendEmailToUserMail;

class SendEmailToUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $email = new SendEmailToUserMail();
        Mail::to($event->email)->send($email);
    }
}
