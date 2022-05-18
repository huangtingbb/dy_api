<?php

namespace Huangtingbb\DyApi\LifeService\Poi;

use Huangtingbb\DyApi\OpenApi;

/**
 * 商品查询通用佣金计划
 */
class PlanList extends OpenApi
{
    protected $uri = "/poi/plan/list/";
    protected $method = self::JSON_POST;

    protected $header = [
        "Content-Type"=>"application/json",
    ];

    protected $body = [
        'spu_id',
        'page_no',
        'page_size',
    ];


}