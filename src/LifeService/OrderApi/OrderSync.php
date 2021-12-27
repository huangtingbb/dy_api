<?php

namespace Huangtingbb\DyApi\LifeService\OrderApi;

use Huangtingbb\DyApi\LifeService\LifeService;

class OrderSync extends LifeService
{
    const GATEWAY = "https://developer.toutiao.com";
    protected $uri = "/poi/v2/spu/sync/";
    protected $method = self::HTTP_POST;
    protected $header = [
        'Content-Type' => 'application/json'
    ];
}