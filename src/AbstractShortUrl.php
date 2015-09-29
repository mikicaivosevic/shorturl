<?php
namespace ShortUrl;


use Guzzle\Http\Client;

class AbstractShortUrl
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $url;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @return Client
     */
    protected function getClient()
    {
        return $this->client;
    }

    /**
     * @return mixed
     */
    protected function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    protected function setUrl($url)
    {
        $this->url = $url;
    }


}