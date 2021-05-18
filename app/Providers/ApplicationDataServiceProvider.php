<?php

namespace App\Providers;

use App\Repositories\Contracts\UserInterface;
use Illuminate\Support\ServiceProvider;

class ApplicationDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['admin.includes.*'], function($view) {
            $userRepo = app(UserInterface::class);

            $view->with('currentUser', $userRepo->currentUser());
        });
    }
}
