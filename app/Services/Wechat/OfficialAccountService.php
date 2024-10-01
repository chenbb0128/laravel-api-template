<?php

namespace App\Services\Wechat;

use Overtrue\LaravelWeChat\EasyWeChat;
use Log;

/**
 * 微信公众号服务
 */
class OfficialAccountService
{
    private static $instance;

    /**
     * @var \EasyWeChat\OfficialAccount\Application
     */
    private $appServe;

    public function __construct()
    {
        /**
         * @var \EasyWeChat\OfficialAccount\Application $appServe
         */
        $this->appServe = EasyWeChat::officialAccount();
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
     * 发送客服文本消息
     * @param $openid
     * @param $content
     * @return bool
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function sendCustomerTextMessage($openid, $content): bool
    {
        try {
            $client = $this->appServe->getClient();
            $resp = $client->postJson('cgi-bin/message/custom/send', [
                'touser' => $openid,
                'msgtype' => 'text',
                'text' => [
                    'content' => $content
                ]
            ]);
            if ($resp['errcode']) {
                Log::error('发送文本消息失败:' . $resp['errmsg']);
                return false;
            }
        } catch (\Exception $e) {
            Log::error('发送文本消息失败:' . $e->getTraceAsString());
            return false;
        }

        return true;
    }

    /**
     * 发送客服图片消息
     * @param $openid
     * @param $mediaId
     * @return bool
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function sendCustomerImageMessage($openid, $mediaId)
    {
        try {
            $client = $this->appServe->getClient();
            $resp = $client->postJson('cgi-bin/message/custom/send', [
                'touser' => $openid,
                'msgtype' => 'image',
                'image' => [
                    'media_id' => $mediaId
                ]
            ]);

            if ($resp['errcode']) {
                Log::error('发送文本消息失败:' . $resp['errmsg']);
                return false;
            }
        } catch (\Exception $e) {
            Log::error('发送图片消息失败:' . $e->getTraceAsString());
            return false;
        }

        return true;
    }

    /**
     * 发送模板消息
     * @param $data
     * @return bool
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function sendTemplateMessage($openid, $templateId, $msgData): bool
    {
        $client = $this->appServe->getClient();
        try {
            $data = [
                'touser' => $openid,
                'template_id' => $templateId,
                'data' => $msgData
            ];

            $resp = $client->postJson('cgi-bin/message/template/send', $data);
            if ($resp['errcode']) {
                Log::error('发送模板消息失败:' . $resp['errmsg']);
                return false;
            }
        } catch (\Exception $e) {
            Log::error('发送模板消息失败:' . $e->getTraceAsString());
            return false;
        }

        return true;
    }
}
