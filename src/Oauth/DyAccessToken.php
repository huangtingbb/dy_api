<?php

namespace Huangtingbb\DyApi\Oauth;

use Huangtingbb\DyApi\OpenApi;

class DyAccessToken extends OpenApi
{
    protected $uri = "/oauth/access_token/";
    protected $method = "post";
    protected $header = [
        "Content-Type:multipart/form-data"
    ];

    protected $body = [
        'client_secret',
        'code',
        'grant_type',
        'client_key'
    ];

}