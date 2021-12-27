<?php

namespace Huangtingbb\DyApi\VideoManager\dy;

use Huangtingbb\DyApi\OpenApi;

class VideoCreate extends OpenApi
{
    protected $uri = "/video/create/";
    protected $method = "post";
    protected $header = [
        "Content-Type:multipart/form-data"
    ];

    public function init(){

    }


}