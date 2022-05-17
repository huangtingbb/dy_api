<?php

namespace Huangtingbb\DyApi\LifeService\Goods;

use Huangtingbb\DyApi\OpenApi;

/**
 * 商品线上数据查询
 */
class ProductOnlineList extends OpenApi
{
    protected $uri = "/life/goods/product/online/list/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'access_token',
        'product_ids', //旧的spu_id 逗号给开
        'out_ids' //自己系统的商品id
    ];
}