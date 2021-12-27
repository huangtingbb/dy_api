<?php

namespace Huangtingbb\DyApi\VideoManager\dy;

use Huangtingbb\DyApi\OpenApi;

class VideoUpload extends OpenApi
{
    protected $uri = "/video/upload/";
    protected $method = "post";
    protected $header = [
        "Content-Type:multipart/form-data"
    ];

    public function init($data){

    }

}