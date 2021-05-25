<?php

namespace App\Providers;

use App\Facades\Seo;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Support\ServiceProvider;

class PageSeoServiceProvider extends ServiceProvider
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

        view()->composer(['pages.includes.seo_header'], function($view)  {
            $seo = Seo::build();
            extract($seo);
            $view->with('pageDescription', $pageDescription);
            $view->with('pageKeywords', $pageKeywords);
            $view->with('canonicalUrl', $canonicalUrl);

            $view->with('ogType', $ogType);
            $view->with('ogTitle', $ogTitle);
            $view->with('ogDescription', $ogDescription);
            $view->with('ogImage', $ogImage);
            $view->with('ogUrl', $ogUrl);
            $view->with('ogSiteName', $ogSiteName);

        });
    }
}
