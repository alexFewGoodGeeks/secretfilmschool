<?php


namespace App\Services;


use App\Repositories\BlogPageRepository;
use App\Repositories\HomePageSeoRepository;

class SeoPageManager
{
    public function build()
    {
        if (request()->is("/")) {
            return new HomePageSeoRepository();
        }

        if (request()->is('blog*')) {
            return new BlogPageRepository();
        }

    }
}
