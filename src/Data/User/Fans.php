<?php

namespace Huangtingbb\DyApi\Data\User;

use Huangtingbb\DyApi\OpenApi;

class Fans extends OpenApi
{
    protected $uri = "/data/external/user/fans/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'open_id',
        'access_token',
        'date_type',
    ];

}