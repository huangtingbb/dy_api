<?php

namespace Huangtingbb\DyApi\Data\Video;

use Huangtingbb\DyApi\OpenApi;

class Comment extends OpenApi
{
    protected $uri = "/data/external/item/comment/";
    protected $method = self::HTTP_GET;

    protected $query = [
        'open_id',
        'access_token',
        'item_id',
        'date_type'
    ];

    public function initQuery(&$data)
    {
        parent::initQuery($data); // TODO: Change the autogenerated stub
        $this->query['item_id'] = urlencode($this->query['item_id']);
    }

}