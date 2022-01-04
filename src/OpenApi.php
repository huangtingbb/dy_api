<?php

namespace Huangtingbb\DyApi;

use Huangtingbb\DyApi\Exceptions\InvalidParamsException;

abstract class OpenApi
{
    const GATEWAY = "https://open.douyin.com/";
    const HTTP_GET = "get";
    const HTTP_POST = "post";

    protected $request = null;
    protected $uri = "";
    protected $method = "";
    protected $header = [];
    protected $query = [];
    protected $body = [];

    public function __construct(){
        $this->request = Request::getInstance();
    }

    public function init(array $data){
        //初始化参数
        $this->initQuery($data);
        $this->initBody($data);
    }

    /**
     * 初始化URL参数
     * @param $data
     * @throws InvalidParamsException
     */
    protected function initQuery(&$data){
        if (!empty($this->query)) {
            foreach ($this->query as $key) {
                if (!isset($data[$key])) throw new InvalidParamsException($key, 1001);
                $this->query[$key] = $data[$key];
                unset($data[$key]);
            }
        }
    }

    /**
     * 初始化body
     * @param $data
     * @throws InvalidParamsException
     */
    protected function initBody(&$data){
        if (!empty($this->body)) {
            foreach ($this->body as $key) {
                if (!isset($data[$key])) throw new InvalidParamsException($key, 1001);
                $this->body[$key] = $data[$key];
                unset($data[$key]);
            }
        }
    }

    public abstract function request();
}