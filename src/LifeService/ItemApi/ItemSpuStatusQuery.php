<?php

namespace Huangtingbb\DyApi\LifeService\ItemApi;

use Huangtingbb\DyApi\LifeService\LifeService;

class ItemSpuStatusQuery extends LifeService
{
    protected $uri = "/poi/v2/spu/status/";
    protected $method = self::HTTP_GET;
}