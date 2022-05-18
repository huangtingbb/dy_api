<?php

namespace Huangtingbb\DyApi\LifeService\Goods;

use Huangtingbb\DyApi\OpenApi;

class TemplateGet extends OpenApi
{
    protected $uri = "/life/goods/template/get/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'access_token',
        'category_id',
        'product_type'
    ];
}