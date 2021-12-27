<?php

namespace Huangtingbb\DyApi;

abstract class OpenApi
{
    const GATEWAY = "https://open.douyin.com/";
    const HTTP_GET = "get";
    const HTTP_POST = "post";

    protected $uri = "";
    protected $method = "";
    protected $header = [];

    public abstract function init(array $data);
}