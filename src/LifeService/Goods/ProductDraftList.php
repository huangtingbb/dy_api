<?php

namespace Huangtingbb\DyApi\LifeService\Goods;

use Huangtingbb\DyApi\OpenApi;

/**
 * 商品草稿数据列表
 */
class ProductDraftList extends OpenApi
{
    protected $uri = "/life/goods/product/draft/list/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'access_token',
        'cursor',
        'count',
        'status'
    ];
}