<?php

namespace Huangtingbb\DyApi\VideoManager\Dy;

use Huangtingbb\DyApi\Exceptions\InvalidParamsException;
use Huangtingbb\DyApi\OpenApi;
use mysql_xdevapi\Exception;

class VideoUpload extends OpenApi
{
    protected $request;
    protected $uri = "/video/upload/";
    protected $method = self::HTTP_POST;
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


    public function initBody(&$data){
        parent::initBody($data);
        $this->body['video'] = new \CURLFile($this->body['video']);
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