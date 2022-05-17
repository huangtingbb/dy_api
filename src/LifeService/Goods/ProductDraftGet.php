<?php

namespace Huangtingbb\DyApi\LifeService\Goods;

use Huangtingbb\DyApi\OpenApi;

/**
 * 商品草稿数据查询
 */
class ProductDraftGet extends OpenApi
{
    protected $uri = "/life/goods/product/draft/get/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'access_token',
        'product_ids', //旧的spu_id
        'out_ids' //自己系统的商品id
    ];
}