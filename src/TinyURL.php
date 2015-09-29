<?php
namespace ShortUrl;

class TinyURL extends AbstractShortUrl implements ShortURLInterface
{

    /**
     * @param $url
     */
    public function __construct($url)
    {
        parent::__construct();
        $this->setUrl($url);
   }

    /**
     * Get short url
     * @return \Guzzle\Http\EntityBodyInterface|string
     */
    public function getShortUrl()
    {
        $request = $this->getClient()->get("http://tinyurl.com/api-create.php?url={$this->getUrl()}");
        $response = $request->send();
        return $response->getBody();
    }
}
