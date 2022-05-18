<?php

namespace Huangtingbb\DyApi;
use Huangtingbb\DyApi\Request;

/**
 * @method   dyVideoUpload($data)                       上传视频
 * @method   dyVideoCreate($data)                       发布视频
 * @method   getDyAccessToken($data)                    获取抖音用户access_token
 * @method   refreshDyAccessToken($data)                刷新抖音用户access_token
 * @method   RenewRefreshToken($data)                   刷新抖音用户refresh_token
 * @method   getDataExternalUserVideo($data)            获取用户视频情况
 * @method   getDataExternalUserFans($data)             获取用户粉丝数
 * @method   getDataExternalUserLike($data)             获取用户点赞数
 * @method   getDataExternalUserComment($data)          获取用户评论数
 * @method   getDataExternalUserShare($data)            获取用户分享数
 * @method   getDataExternalUserProfile($data)          获取用户主页访问数
 * @method   getDataExternalVideoBase($data)            获取视频基础信息
 * @method   getDataExternalVideoLike($data)            获取视频点赞
 * @method   getDataExternalVideoComment($data)         获取视频评论
 * @method   getDataExternalVideoShare($data)           获取视频分享
 * @method   getDataExternalVideoPlay($data)            获取视频播放
 * @method   getGoodsTemplate($data)                    获取模版
 * @method   getGoodsProductDraft($data)                获取商品草稿
 * @method   getGoodsProductList($data)                 获取商品草稿列表
 * @method   getGoodsProductOnline($data)               获取线上商品
 * @method   getGoodsProductOnlineList($data)           获取线上商品
 * @method   saveGoodsProduct($data)                    保存商品
 * @method   freeAuditEditGoodsProduct($data)           免审修改商品
 * @method   operateGoodsProductStatus($data)           商品上下架
 * @method   syncGoodsProductStock($data)               同步商品库存
 * @method   getPoiPlanList($data,$header = [])         查询佣金计划列表
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
        $data = isset($args[0]) ? $args[0] : [];
        $header = isset($args[1]) ? $args[1] : [];
        $api_class -> init($data,$header);
        return $this->invokeApi($api_class);
    }


    /**
     * @param OpenApi $api_class open_api_class
     */
    private function invokeApi(OpenApi $api_class){
        return $api_class->request();
    }
}