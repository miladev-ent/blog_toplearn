<?php

namespace Mlk\User\Listeners;

use Illuminate\Support\Facades\Log;

class SendSmsToUserListener
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
        dd($event);
        Log::info('afaf');
    }
}
