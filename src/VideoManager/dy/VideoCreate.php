<?php

namespace Huangtingbb\DyApi\VideoManager\dy;

use Huangtingbb\DyApi\OpenApi;

class VideoCreate extends OpenApi
{
    protected $uri = "/video/create/";
    protected $method = self::HTTP_POST;
    protected $header = [
        "Content-Type:application/json"
    ];

    protected $query = [
        'access_token',
        'open_id',
    ];

    protected $body = [
        'video_id',
    ];

    public function request()
    {
        return $this->request
            ->setUrl(static::GATEWAY.$this->uri)
            ->setHeader($this->header)
            ->setQuery($this->query)
            ->setBody($this->body)
            ->postJson();
    }
}