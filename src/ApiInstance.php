<?php

namespace Huangtingbb\DyApi;

class ApiInstance
{

    public function __call($method,$args){
        var_dump($method);
        var_dump($args);
    }

}