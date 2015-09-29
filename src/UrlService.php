<?php
namespace ShortUrl;

class UrlService
{
    /**
     * @param $url
     * @param $service
     * @return null|string
     */
    public static function create($url, $service = TinyURL::class)
    {
        $shortUrl = null;
        switch($service) {
            case TinyURL::class:
                $tinyUrl = new TinyURL($url);
                $shortUrl = $tinyUrl->getShortUrl();
                break;
        }
        return $shortUrl;
    }
}