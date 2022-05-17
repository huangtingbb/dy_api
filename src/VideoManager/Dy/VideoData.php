<?php

namespace Huangtingbb\DyApi\VideoManager\Dy;

use Huangtingbb\DyApi\OpenApi;

class VideoData extends OpenApi
{
    protected $request;
    protected $uri = "/video/data/";
    protected $method = self::HTTP_GET;
    protected $header = [
        "Content-Type:multipart/form-data"
    ];
    protected $query = [
        'access_token',
        'open_id',
    ];

    protected $body = [
        'item_ids'
    ];
}