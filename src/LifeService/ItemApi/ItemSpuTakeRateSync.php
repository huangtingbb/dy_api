<?php

namespace Huangtingbb\DyApi\LifeService\ItemApi;

use Huangtingbb\DyApi\LifeService\LifeService;

class ItemSpuTakeRateSync extends LifeService
{
    protected $uri = "/poi/v2/spu/take_rate/sync/";
    protected $method = self::HTTP_POST;
    protected $header = [
        'Content-Type' => 'application/json'
    ];
}