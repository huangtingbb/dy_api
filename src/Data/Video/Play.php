<?php

namespace Huangtingbb\DyApi\Data\Video;

use Huangtingbb\DyApi\OpenApi;

class Play extends OpenApi
{
    protected $uri = "/data/external/item/play/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'open_id',
        'access_token',
        'item_id',
        'date_type'
    ];
}