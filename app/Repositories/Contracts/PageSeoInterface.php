<?php


namespace App\Repositories\Contracts;


interface PageSeoInterface
{
    public function getPageDescription();

    public function getPageKeywords();

    public function getCanonicalUrl();

    public function getOgType();

    public function getOgTitle();

    public function getOgDescription();

    public function getOgImage();

    public function getOgUrl();

    public function getOgSiteName();

}
