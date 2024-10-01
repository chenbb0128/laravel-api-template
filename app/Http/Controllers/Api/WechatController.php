<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Wechat\OfficialAccountService;
use App\Services\WechatService;
use Illuminate\Http\Request;
use Overtrue\LaravelWeChat\EasyWeChat;

class WechatController extends Controller
{
    public function serve(Request $request, WechatService $wechatService)
    {
        $server = OfficialAccountService::getInstance()->getServe();
        $server->with(function ($message) use ($wechatService) {
            $msgType = strtolower($message['MsgType']);
            switch ($msgType) {
                case 'event':
                    $function = 'deal' . ucfirst(strtolower($message['Event']));
                    break;
                default:
                    $function = 'deal' . ucfirst($msgType);
            }

            if (method_exists($wechatService, $function)) {
                return $wechatService->$function($message);
            }

            return '消息不支持';
        });

        return $server->serve();
    }
}
