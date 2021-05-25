<?php


namespace App\Repositories;


use App\Repositories\Contracts\PageSeoInterface;

class BlogPageRepository extends AbstractSeoRepository
{

    public function getPageDescription()
    {
        return "Blog Page description";
    }

    public function getCanonicalUrl()
    {
        return "https://secretfilmschool.com/blog/page/12";
    }

    public function getOgType()
    {
        // TODO: Implement getOgType() method.
    }

    public function getOgTitle()
    {
        // TODO: Implement getOgTitle() method.
    }

    public function getOgDescription()
    {
        // TODO: Implement getOgDescription() method.
    }

    public function getOgImage()
    {
        // TODO: Implement getOgImage() method.
    }

    public function getOgUrl()
    {
        // TODO: Implement getOgUrl() method.
    }

    public function getOgSiteName()
    {
        // TODO: Implement getOgSiteName() method.
    }

    public function getPageKeywords()
    {
        // TODO: Implement getPageKeywords() method.
    }
}
