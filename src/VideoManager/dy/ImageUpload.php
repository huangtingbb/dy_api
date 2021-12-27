<?php

namespace Huangtingbb\DyApi\VideoManager\dy;

use Huangtingbb\DyApi\OpenApi;

class ImageUpload extends OpenApi
{
    protected $uri = "/image/upload/";
    protected $method = "post";
    protected $header = [
        "Content-Type:multipart/form-data"
    ];

    public function init(){
    }

}