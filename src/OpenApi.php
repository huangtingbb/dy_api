<?php

namespace Huangtingbb\DyApi;

use Huangtingbb\DyApi\Exceptions\InvalidParamsException;

abstract class OpenApi
{
    const GATEWAY = "https://open.douyin.com";
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

    /**
     * @param array $data
     * @throws InvalidParamsException
     */
    public function init(array $data){
        $this->initQuery($data);
        $this->initBody($data);
    }

    /**
     * 初始化URL参数
     * @param $data
     * @throws InvalidParamsException
     */
    protected function initQuery(&$data){
        $query = [];
        if (!empty($this->query)) {
            foreach ($this->query as $key) {
                if (!isset($data[$key])) throw new InvalidParamsException($key, 1001);
                $query[$key] = $data[$key];
                unset($data[$key]);
            }
        }
        $this->query = $query;
    }

    /**
     * 初始化body
     * @param $data
     * @throws InvalidParamsException
     */
    protected function initBody(&$data){
        $body = [];
        if (!empty($this->body)) {
            foreach ($this->body as $key) {
                if (!isset($data[$key])) throw new InvalidParamsException($key, 1001);
            }
        }
        $this->body = $data;
    }

    public function request(){
        $method = $this->method;
        return $this->request
            ->setUrl(static::GATEWAY.$this->uri)
            ->setheader($this->header)
            ->setQuery($this->query)
            ->setBody($this->body)
            ->$method();
    }
}