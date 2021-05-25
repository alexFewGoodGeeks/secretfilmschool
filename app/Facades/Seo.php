<?php


namespace App\Facades;


use App\Services\SeoPageManager;
use Illuminate\Support\Facades\Facade;

class Seo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return (new SeoPageManager())->build();
    }
}
