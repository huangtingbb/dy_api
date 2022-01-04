<?php

namespace Huangtingbb\DyApi;
use Huangtingbb\DyApi\Request;

class ApiInstance
{
    /**
     * api接口映射
     * @var array
     */
    private $api_map = [];

    public function __construct()
    {
        $this->api_map = include_once __DIR__ .'/api_map.php';
    }

    public function __call($method,$args){
        if(isset($this->api_map[$method])){
            $class_name = $this->api_map[$method];
        }else{
            throw new \Exception("error API called");
        }
        $api_class = new $class_name;
        $api_class -> init($args[0]);
        return $this->invokeApi($api_class);
    }


    /**
     * @param OpenApi $api_class open_api_class
     */
    private function invokeApi(OpenApi $api_class){
        $api_class->request();
    }
}