<?php

namespace Huangtingbb\DyApi\VideoManager\dy;

use Huangtingbb\DyApi\OpenApi;

class VideoCreate extends OpenApi
{
    protected $uri = "/video/create/";
    protected $method = "post";
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
}