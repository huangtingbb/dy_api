<?php

namespace Huangtingbb\DyApi\LifeService\Poi;

use Huangtingbb\DyApi\OpenApi;

/**
 * 商品查询通用佣金计划
 */
class PlanList extends OpenApi
{
    protected $uri = "/life/goods/product/draft/list/";
    protected $method = self::HTTP_POST;

    protected $header = [
        "Content-Type:application/json",
        "access-token"
    ];

    protected $body = [
        'spu_id',
        'page_no',
        'page_size',
    ];
}