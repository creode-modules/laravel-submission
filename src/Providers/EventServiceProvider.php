<?php

namespace Creode\LaravelSubmission\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Creode\LaravelHubspotForms\Listeners\SendDataToHubspot;
use Creode\LaravelWishlist\app\Events\WishlistCreated;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        WishlistCreated::class => [
            SendDataToHubspot::class,
        ],
    ];
}
