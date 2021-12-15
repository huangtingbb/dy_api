<?php

namespace Huangtingbb\DyApi\LifeService\ItemApi;

use Huangtingbb\DyApi\LifeService\LifeService;

class ItemSpuStockSync extends LifeService
{
    protected $uri = "/poi/v2/spu/stock_update/";
    protected $method = self::HTTP_POST;
    protected $header = [
        'Content-Type' => 'application/json'
    ];
}