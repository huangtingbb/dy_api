<?php

namespace Huangtingbb\DyApi;

use Huangtingbb\DyApi\Exceptions\InvalidUrlException;

class Request
{
    /**
     * 请求头
     * @var array
     */
    public static $instance = null;
    private array  $header = [];
    private array  $body = [];
    private array  $query = [];
    private string $url;
    private string $method = "post";
    private bool $ssl;
    private $ch = null;

    private function __construct(){
        $this->ch = curl_init();
    }

    public static function getInstance(){
        if (is_null(self::$instance)) self::$instance = new self();
        return self::$instance;
    }

    public function setUrl($url){
        $this->url = $url;
        return self::$instance;
    }

    public function setHeader($header){
        $this->header = $header;
        return self::$instance;
    }

    public function setBody($body){
        $this->body = $body;
        return self::$instance;
    }

    public function setQuery($query){
        $this->query = $query;
        return self::$instance;
    }

    public function get(){
        $this->send();
    }

    public function post(){
        curl_setopt($this->ch, CURLOPT_POST, true);//设置请求方式为post
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $this->body);//设置请求数据
        $this->send();
    }

    private function send(){
        if (empty($this->url)) throw new InvalidUrlException("url is not allowed empty");
        if (!empty($this->query)){
            $this->url .= "?".http_build_url($this->query);
        }
        curl_setopt($this->ch, CURLOPT_URL, $this->url);//设置网址
        curl_setopt($this->ch, CURLOPT_HEADER, false);//设置头信息

        if (strpos($this->url,"https") === 0) {
            curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);//不做服务器认证
            curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, false);//不做客户端认证
        }
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);//只获取页面内容，但不输出

        if(!empty($this->header)){
            curl_setopt($this->ch,CURLOPT_HTTPHEADER,$this->header);
        }
        $str = curl_exec($this->ch);//执行访问，返回结果
        $return = json_decode($str);
        curl_init($this->ch);//释放资源
        return $return;
    }




}