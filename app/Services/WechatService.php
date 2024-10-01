<?php

namespace App\Services;


class WechatService
{
    public function dealSubscribe($message)
    {
        return '欢迎关注';
    }

    public function dealText($message)
    {
        return '收到文字消息';
    }

    public function dealImage($message)
    {
        return '收到图片消息';
    }

    public function dealVoice($message)
    {
        return '收到语音消息';
    }

    public function dealScan()
    {
        return '扫描二维码';
    }

    public function dealVideo()
    {
        return '收到视频消息';
    }

    public function dealLocation()
    {
        return '收到位置消息';
    }

    public function dealLink()
    {
        return '收到链接消息';
    }

    public function dealUnsubscribe()
    {
        return '收到取消关注消息';
    }

    public function dealClick($message)
    {
        return '收到菜单点击事件';
    }
}
