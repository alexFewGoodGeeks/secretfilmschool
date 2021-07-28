<?php

namespace App\Services;

use App\Repositories\BlogPageRepository;
use App\Repositories\CustomPageRepository;
use App\Repositories\HomePageSeoRepository;

class SeoPageManager
{
    public function build()
    {
        if (request()->is("/")) {
            return new HomePageSeoRepository();
        }

        if (request()->is('article*') || request()->is('blog*')) {
            return new BlogPageRepository();
        }
        else {
            return new CustomPageRepository();
        }

    }
}
