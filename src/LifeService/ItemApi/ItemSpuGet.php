<?php

namespace Huangtingbb\DyApi\LifeService\ItemApi;

use Huangtingbb\DyApi\LifeService\LifeService;

class ItemSpuGet extends LifeService
{
    protected $uri = "/poi/v2/spu/get/";
    protected $method = self::HTTP_GET;
}