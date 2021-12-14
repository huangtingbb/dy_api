<?php

namespace Huangtingbb\DyApi\LifeService\ShopApi;

class ShopSync extends LifeService
{
   protected $uri = "/poi/sku/sync/";
   protected $method = "POST";
   protected $header = [
       'Content-Type' => 'application/json'
   ];


   public function request($body = [])
   {
       // TODO: Implement request() method.
   }
}