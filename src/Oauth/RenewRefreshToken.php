<?php

namespace Huangtingbb\DyApi\Oauth;

use Huangtingbb\DyApi\OpenApi;

class RenewRefreshToken extends OpenApi
{
    protected $uri = "/oauth/renew_refresh_token/";
    protected $method = "post";
    protected $header = [
        "Content-Type:multipart/form-data"
    ];

    protected $body = [
        'client_key',
        'refresh_token'
    ];

}