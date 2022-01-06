<?php

namespace Huangtingbb\DyApi\VideoManager\Dy;

use Huangtingbb\DyApi\OpenApi;

class ImageUpload extends OpenApi
{
    protected $uri = "/image/upload/";
    protected $method = "post";
    protected $header = [
        "Content-Type:multipart/form-data"
    ];

}