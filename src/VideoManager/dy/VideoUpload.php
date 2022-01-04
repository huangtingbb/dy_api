<?php

namespace Huangtingbb\DyApi\VideoManager\dy;

use Huangtingbb\DyApi\Exceptions\InvalidParamsException;
use Huangtingbb\DyApi\OpenApi;
use mysql_xdevapi\Exception;

class VideoUpload extends OpenApi
{
    protected $request;
    protected $uri = "/video/upload/";
    protected $method = "post";
    protected $header = [
        "Content-Type:multipart/form-data"
    ];
    protected $query = [
        'access_token',
        'open_id',
    ];

    protected $body = [
        'video',
    ];


    public function initBody($data){
        parent::initBody($data);
        $this->body["content-type"] =  "video/mp4";
    }

    public function request(){
        $method = $this->method;
        return $this->request
            ->setUrl(static::GATEWAY.$this->uri)
            ->setheader($this->header)
            ->setQuery($this->query)
            ->setBody($this->body)
            ->$method();
    }

}