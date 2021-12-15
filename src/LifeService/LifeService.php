<?php

namespace Huangtingbb\DyApi\LifeService;

class LifeService
{
    const GATEWAY = "https://open.douyin.com/";
    const HTTP_GET = "get";
    const HTTP_POST = "post";

    protected $uri = "";
    protected $method = "";
    protected $header = [];

    public function __construct($class_name,$body){

    }

    public function call($body = []){

    }
}