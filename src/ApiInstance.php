<?php

namespace Huangtingbb\DyApi;
use Huangtingbb\DyApi\Request;

/**
 * @method   dyVideoUpload($data)                   上传视频
 * @method   dyVideoCreate($data)                   发布视频
 * @method   getDyAccessToken($data)                获取抖音用户access_token
 * @method   refreshDyAccessToken($data)            刷新抖音用户access_token
 * @method   RenewRefreshToken($data)               刷新抖音用户refresh_token
 * @method   getDataExternalUserVideo($data)        获取用户视频情况
 * @method   getDataExternalUserFans($data)         获取用户粉丝数
 *
 */
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
        return $api_class->request();
    }
}