<?php

namespace Huangtingbb\DyApi\Data\Video;

use Huangtingbb\DyApi\OpenApi;

class Base extends OpenApi
{
    protected $uri = "/data/external/item/base/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'open_id',
        'access_token',
        'item_id',
    ];

}