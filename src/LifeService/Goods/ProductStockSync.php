<?php

namespace Huangtingbb\DyApi\LifeService\Goods;

use Huangtingbb\DyApi\OpenApi;

/**
 * 商品同步库存
 */
class ProductStockSync extends OpenApi
{
    protected $uri = "/life/goods/stock/sync/";
    protected $method = self::HTTP_POST;

    protected $query = [
        'access_token',
    ];

    protected $body = [
        'product_id',
        'out_id',
        'stock'=>[
            'limit_type',
            'stock_qty',
        ],
    ];
}