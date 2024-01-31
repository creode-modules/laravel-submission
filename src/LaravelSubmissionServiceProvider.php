<?php

namespace Creode\LaravelSubmission;

use Illuminate\Support\ServiceProvider;

class LaravelSubmissionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Creode\LaravelSubmission\Providers\EventServiceProvider::class);
    }
}
