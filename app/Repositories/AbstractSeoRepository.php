<?php
namespace App\Repositories;

abstract class AbstractSeoRepository implements \App\Repositories\Contracts\PageSeoInterface
{
    /**
     * @return array
     */
    public function build()
    {
        return [
            'pageDescription' => $this->getPageDescription(),
            'pageKeywords' => $this->getPageKeywords(),
            'canonicalUrl' => $this->getCanonicalUrl(),
            'ogType' => $this->getOgType(),
            'ogTitle' => $this->getOgTitle(),
            'ogDescription' => $this->getOgDescription(),
            'ogImage' => $this->getOgImage(),
            'ogUrl' => $this->getOgUrl(),
            'ogSiteName' => $this->getOgSiteName()
        ];
    }
}
