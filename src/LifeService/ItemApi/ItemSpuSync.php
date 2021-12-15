<?php

namespace Huangtingbb\DyApi\LifeService\ItemApi;

use Huangtingbb\DyApi\LifeService\LifeService;

class ItemSpuSync extends LifeService
{
    protected $uri = "/poi/v2/spu/sync/";
    protected $method = self::HTTP_POST;
    protected $header = [
        'Content-Type' => 'application/json'
    ];
}