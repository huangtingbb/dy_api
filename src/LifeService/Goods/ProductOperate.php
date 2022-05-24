<?php

namespace Huangtingbb\DyApi\LifeService\Goods;

use Huangtingbb\DyApi\OpenApi;

/**
 * 商品上下架
 */
class ProductOperate extends OpenApi
{
    protected $uri = "/life/goods/product/operate/";
    protected $method = self::JSON_POST;

    protected $header = [
        "Content-Type: application/json"
    ];

    protected $query = [
        'access_token',
    ];

    protected $body = [
        'product_id',
        'out_id',
        'op_type', //1上线，2下线
    ];
}