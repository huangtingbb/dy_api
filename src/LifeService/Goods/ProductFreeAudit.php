<?php

namespace Huangtingbb\DyApi\LifeService\Goods;

use Huangtingbb\DyApi\OpenApi;

/**
 * 商品免审修改
 */
class ProductFreeAudit extends OpenApi
{
    protected $uri = "/life/goods/product/free_audit/";
    protected $method = self::JSON_POST;

    protected $query = [
        'access_token',
    ];

    protected $body = [
        'product_id',
        'out_id',
        'sold_end_time',
        'stock_qty'
    ];
}