<?php

namespace Huangtingbb\DyApi\LifeService\Goods;

use Huangtingbb\DyApi\OpenApi;

/**
 * 商品同步库存
 */
class ProductStockSync extends OpenApi
{
    protected $uri = "/life/goods/stock/sync/";
    protected $method = self::JSON_POST;

    protected $header = [
        "Content-Type: application/json"
    ];

    protected $body = [
        'product_id',
        'out_id',
        'stock'
    ];

    protected $stock = [
        'limit_type',
        'stock_qty',
    ];
}