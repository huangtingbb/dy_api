<?php

namespace Huangtingbb\DyApi\Data\User;

use Huangtingbb\DyApi\OpenApi;

class Video extends OpenApi
{
    protected $uri = "/data/external/user/item/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'open_id',
        'access_token',
        'date_type',
    ];

}