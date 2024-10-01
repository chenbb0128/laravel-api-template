<?php

namespace App\Http\Controllers\Api;

use App\Services\Cps\DataokeService;
use App\Services\Cps\JdService;
use App\Services\Cps\JingtuituiService;
use App\Services\Wechat\OfficialAccountService;

class TestController
{
    public function test()
    {

//        $itemId = 'hpoEHUrQe20qbkiLnfCcpOM7_3tyFQIwo0ePO6qszZw';
//        $item = JdService::getInstance()->getGoodsInfo($itemId);
//        die;

        $content = '——中秋好礼提前备——

先领99-20补贴券
https://kurl06.cn/71ZPpn

王小珥 有机本草银耳 80g*2罐
https://u.jd.com/ta5e55j
🔴拍下49.9元；含伴侣+焖烧杯
————
*还有2口味燕窝粥 160g*6碗
🔴到手29.9元；折4.98元/碗
https://u.jd.com/tO5NJPb

*满满胶.质 自饮或送.礼都很赞';
//        JingtuituiService::getInstance()->doChainContent($content);
        $content = 'https://u.jd.com/tO5NJPb';
        DataokeService::getInstance()->contentParse($content);

        die;

        $msgData = [];
        $data = [
            'touser' => 'ou5-TxPLYwNt9dQYBj3JtuQWBoVg',
            'template_id' => 'NnxVSP95IDwVA3lw0HJ3Xbv7C3B6o_qpLT4MIqqpfac',
            'data' => $msgData
        ];

        OfficialAccountService::getInstance()->sendTemplateMessage($data);
        die;
        $openid = 'ou5-TxPLYwNt9dQYBj3JtuQWBoVg';
        $content = '你好呀1';
        OfficialAccountService::getInstance()->sendCustomerTextMessage($openid, $content);
        dd(333);
    }
}
