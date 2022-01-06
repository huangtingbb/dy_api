<?php

namespace Huangtingbb\DyApi\Data\User;

use Huangtingbb\DyApi\OpenApi;

class Comment extends OpenApi
{
    protected $uri = "/data/external/user/comment/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'open_id',
        'access_token',
        'date_type',
    ];

}