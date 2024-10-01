<?php

namespace App\Services\Cps;

use CheckSign;

/**
 * 大淘客服务
 */
class DataokeService
{
    private static $instance;
    private $client;

    private function __construct()
    {
        $client = new CheckSign();
        $client->appKey = config('dataoke.app_key');
        $client->appSecret = config('dataoke.secret_key');

        $this->client = $client;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * 剪切板解析
     * https://www.dataoke.com/pmc/api-d.html?id=80
     * @param $content
     * @return array|mixed
     */
    public function contentParse($content)
    {
        $client = $this->client;
        $client->version = 'v1.0.0';
        $client->host = 'https://openapi.dataoke.com/api/dels/kit/contentParse';
        $params = ['content' => $content];
        $data = [];
        try {
            $response = $client->request($params);
            $result = json_decode($response, true);
            if ($result['code'] == 0 && $result['data']['platType']) {
                $data = $result['data'];
            }
        } catch (\Exception $e) {
            \Log::error('大淘客剪切板解析错误：' . $e->getMessage());
        }

        return $data;
    }

}
