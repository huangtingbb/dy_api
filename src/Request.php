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
    private $header = [];
    private $body = [];
    private $query = [];
    private $url;
    private $ch = null;

    private function __construct(){
        $this->ch = curl_init();
    }

    public static function getInstance(){
        if (is_null(self::$instance)) self::$instance = new self();
        return self::$instance;
    }

    /**
     * @param $url
     * @return array|null
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return self::$instance;
    }


    /**
     * @param array $header
     * @return array|null
     */
    public function setHeader($header = []){
        if (!empty($header))
            $this->header = array_merge($this->header,$header);
        return self::$instance;
    }

    /**
     * @param $body
     * @return array|null
     */
    public function setBody($body){
        $this->body = $body;
        return self::$instance;
    }

    /**
     * @param $query
     * @return array|null
     */
    public function setQuery($query){
        $this->query = $query;
        return self::$instance;
    }

    /**
     * get request
     * @return mixed
     * @throws InvalidUrlException
     */
    public function get(){
        return $this->send();
    }

    /**
     * post request
     * @return mixed
     * @throws InvalidUrlException
     */
    public function post(){
        curl_setopt($this->ch, CURLOPT_POST, true);//设置请求方式为post
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $this->body);//设置请求数据
        return $this->send();
    }

    /**
     * json post
     * @return mixed
     * @throws InvalidUrlException
     */
    public function postJson(){
        curl_setopt($this->ch, CURLOPT_POST, true);//设置请求方式为post
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($this->body));//设置请求数据
        return $this->send();
    }

    /**
     * @return mixed
     * @throws InvalidUrlException
     */
    private function send(){
        if (empty($this->url)) throw new InvalidUrlException("url is not allowed empty");
        if (!empty($this->query)){
            $this->url .= "?".http_build_query($this->query);
        }
        curl_setopt($this->ch, CURLOPT_URL, $this->url);//设置网址
        curl_setopt($this->ch, CURLOPT_HEADER, false);//设置头信息

        if (strpos($this->url,"https") === 0) {
            curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);//不做服务器认证
            curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, false);//不做客户端认证
        }
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);//只获取页面内容，但不输出

        if(!empty($this->header)){
            var_dump($this->header);
            curl_setopt($this->ch,CURLOPT_HTTPHEADER,$this->header);
        }
        $str = curl_exec($this->ch);//执行访问，返回结果
        $return = json_decode($str,true);
        $this->ch = curl_init();//释放资源
        return $return;
    }




}