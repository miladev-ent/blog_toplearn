<?php

namespace Mlk\User\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Mlk\User\Events\SendEmailToUserEvent;
use Mlk\User\Listeners\SendEmailToUserListener;
use Mlk\User\Listeners\SendSmsToUserListener;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        SendEmailToUserEvent::class => [
            SendEmailToUserListener::class,
            SendSmsToUserListener::class,
        ],
    ];
}
