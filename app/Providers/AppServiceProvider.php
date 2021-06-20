<?php

namespace App\Providers;

use App\Repositories\Contracts\UserInterface;
use Illuminate\Support\Facades\Schema;
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

        $url = request()->url();
        if (strpos($url, "secretfilmschool.com") != -1 ) {
            $this->app->bind('path.public', function() {
                return base_path().'/public_http';
            });
        }


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
