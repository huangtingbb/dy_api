<?php

namespace Huangtingbb\DyApi\Oauth;

use Huangtingbb\DyApi\OpenApi;

class RefreshAccessToken extends OpenApi
{
    protected $uri = "/oauth/refresh_token/";
    protected $method = "post";
    protected $header = [
        "Content-Type:multipart/form-data"
    ];

    protected $body = [
        'client_key',
        'grant_type', /* => refresh_token */
        'refresh_token'
    ];

}