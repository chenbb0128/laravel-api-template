<?php

namespace App\Services\Cps;

use GuzzleHttp\Client;
use Log;

/**
 * 京推推服务
 */
class JingtuituiService
{
    private static $instance;
    private $client;

    private $defaultQuery;

    private function __construct()
    {
        $this->client = new Client();

        $this->defaultQuery = [
            'appid' => config('jingtuitui.app_id'),
            'appkey' => config('jingtuitui.app_key'),
            'unionid' => config('jd.union_id'),
        ];
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * 转链，输入什么内容，返回转链后的内容
     * @param $content [需要转链的内容]
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function doChainContent($content)
    {
        $chainContent = '';
        try {
            $query = array_merge($this->defaultQuery, [
                'v' => 'v3',
                'content' => $content
            ]);

            $url = 'http://japi.jingtuitui.com/api/universal';
            $resp = $this->client->post($url, [
                'query' => $query
            ]);
            $respRes = json_decode($resp->getBody(), true);
            if ($respRes['return'] == 0) {
                $result = $respRes['result'];
                if ($result['original_content'] != $result['chain_content']) {
                    // 转换成功
                    $chainContent = $result['chain_content'];
                }
            }
        } catch (\Exception $e) {
            Log::error('京推推转链错误：' . $e->getTraceAsString());
        }

        return $chainContent;
    }


}
