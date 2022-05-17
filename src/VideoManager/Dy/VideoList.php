<?php

namespace Huangtingbb\DyApi\VideoManager\Dy;

use Huangtingbb\DyApi\OpenApi;

class VideoList extends OpenApi
{
    protected $request;
    protected $uri = "/video/list/";
    protected $method = self::HTTP_GET;
    protected $header = [
        "Content-Type:multipart/form-data"
    ];
    protected $query = [
        'access_token',
        'open_id',
        'cursor', // Integer | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。
        'count',
    ];
}