<?php

namespace Huangtingbb\DyApi\LifeService\ShopApi;
use Huangtingbb\DyApi\LifeService\LifeService;

class ShopPoiQuery extends LifeService
{
   protected $uri = "/poi/supplier/query/";
   protected $method = self::HTTP_GET;
   protected $header = [
       'Content-Type' => 'application/json'
   ];


   public function request($body = [])
   {
       // TODO: Implement request() method.
   }
}