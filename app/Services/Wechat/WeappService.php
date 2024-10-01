<?php

namespace App\Services\Wechat;

use App\Exceptions\RequestFailException;
use Overtrue\LaravelWeChat\EasyWeChat;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

/**
 * 微信小程序服务
 */
class WeappService
{
    private static $instance;

    private $appServe;

    public function __construct()
    {
        $this->appServe = EasyWeChat::miniApp();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getServe()
    {
        return $this->appServe->getServer();
    }

    /**
     * 用户登陆
     * @param string $code
     * @return array
     * @throws RequestFailException
     * @throws \EasyWeChat\Kernel\Exceptions\HttpException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function login(string $code)
    {
        $utils = $this->appServe->getUtils();
        $res = $utils->codeToSession($code);
        if (isset($data['errcode'])) {
            throw new RequestFailException($data['errcode'], $data['errmsg']);
        }

        return $res;
    }
}
