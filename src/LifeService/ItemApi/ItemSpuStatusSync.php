<?php

namespace Huangtingbb\DyApi\LifeService\ItemApi;

use Huangtingbb\DyApi\LifeService\LifeService;

class ItemSpuStatusSync extends LifeService
{
    protected $uri = "/poi/v2/spu/status_sync/";
    protected $method = self::HTTP_POST;
    protected $header = [
        'Content-Type' => 'application/json'
    ];
}