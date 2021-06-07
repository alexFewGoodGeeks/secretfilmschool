<?php


namespace App\Repositories;


use App\Repositories\Contracts\PageSeoInterface;

class HomePageSeoRepository extends AbstractSeoRepository
{

    public function getPageDescription()
    {
        return "The proven system to take your career all the way.";
    }

    public function getCanonicalUrl()
    {
        return url()->current();
    }

    public function getOgType()
    {
       return 'page';
    }

    public function getOgTitle()
    {
        return 'DISCOVER HOW TO BE A SUCCESSFUL FILMMAKER';
    }

    public function getOgDescription()
    {
        return 'The proven system to take your career all the way.';
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
        return 'Secret Film School';
    }

    public function getPageKeywords()
    {
        // TODO: Implement getPageKeywords() method.
        $words = [
            'BEST FILM SCHOOLS',
            'BEST FILM SCHOOLS IN THE WORLD',
            'TOP FILM SCHOOLS',
            'FILM MAKING COURSES',
            'FILM MARKETING',
            'FILM DISTRIBUTION',
            'MOVIE DISTRIBUTION',
            'ONLINE FILM SCHOOL',
            'ONLINE FILMMAKING COURSES',
            'ONLINE FILM COURSES',
            'ONLINE FILM CLASSES'
        ];

        return implode("," , $words);
    }
}
