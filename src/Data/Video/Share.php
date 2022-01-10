<?php

namespace Huangtingbb\DyApi\Data\Video;

use Huangtingbb\DyApi\OpenApi;

class Share extends OpenApi
{
    protected $uri = "/data/external/item/share/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'open_id',
        'access_token',
        'item_id',
        'date_type'
    ];
}