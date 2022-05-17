<?php

namespace Huangtingbb\DyApi\LifeService\Goods;

use Huangtingbb\DyApi\OpenApi;

/**
 * 创建更新商品
 */
class ProductSave extends OpenApi
{
    protected $uri = "/life/goods/product/save/";
    protected $method = self::HTTP_POST;

    protected $query = [
        'access_token',
    ];

    protected $body = [
        "product" => [
            'product_id',
            'out_id',
            'product_name',
            'category_full_name',
            'category_id',
            'product_type',
            'biz_line',
            'account_name',
            'sold_start_time',
            'sold_end_time',
            'out_url',
            'poi_list' => [
                'supplier_ext_id',
            ],
            'attr_key_value_map'
        ],
        'sku' =>[
            'sku_id',
            'sku_name',
            'origin_amount',
            'actual_amount',
            'stock' => [
                'limit_type',
                'stock_qty'
            ],
            'out_sku_id',
            'status',
            'attr_key_value_map'
        ],
    ];
}