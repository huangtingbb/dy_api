<?php

namespace Huangtingbb\DyApi\LifeService\ShopApi;
use Huangtingbb\DyApi\LifeService\LifeService;

class ShopPoiSync extends LifeService
{
   protected $uri = "/poi/supplier/sync/";
   protected $method = self::HTTP_POST;
   protected $header = [
       'Content-Type' => 'application/json'
   ];


   public function request($body = [])
   {
       // TODO: Implement request() method.
   }
}