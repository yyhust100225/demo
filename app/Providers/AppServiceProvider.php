<?php

namespace App\Providers;

use App\Extensions\Notices\Email;
use App\Extensions\Notices\Sms;
use App\Extensions\Notices\Notify;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Notify::class, function($app){
            return new Sms();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // echo __CLASS__.'@'.__FUNCTION__.'<br>';
    }
}
