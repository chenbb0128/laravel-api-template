<?php

namespace App\Services\Wechat;

use App\Repositories\Models\User;

class TemplateService
{
    /**
     * 发送账单信息
     * @param User $user
     * @param $title
     * @param $startTime
     * @param $endTime
     * @param $orderCount
     * @param $extractMoney
     * @return void
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public static function sendInvoice(User $user, $title, $startTime, $endTime, $orderCount, $extractMoney)
    {
        $msgData = [
            'thing25' => $title,
            'time3' => "{$startTime}~{$endTime}",
            'number10' => $orderCount,
            'amount16' => $extractMoney
        ];

        $templateId = config('wechatTemplateMessage.invoice_generate_template_id');
        OfficialAccountService::getInstance()->sendTemplateMessage($user['official_openid'], $templateId, $msgData);
    }

    /**
     * 用户邀请奖励通知
     * @param User $user [用户信息]
     * @param $title [邀请信息名称]
     * @param $fee [佣金]
     * @param $paymentTime [支付时间]
     * @return void
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public static function sendInviteReward(User $user, $title, $fee, $paymentTime)
    {
        $msgData = [
            'thing15' => $title,
            'amount19' => $fee,
            'time4' => $paymentTime
        ];
        $templateId = config('wechatTemplateMessage.invite_reward_template_id');
        OfficialAccountService::getInstance()->sendTemplateMessage($user['official_openid'], $templateId, $msgData);
    }

    /**
     * 用户邀请绑定成功通知
     * @param User $user [邀请人信息]
     * @param $title [名称]
     * @param $inviteeName [被邀请人昵称]
     * @param $createdAt [时间]
     * @param $count [邀请数量]
     * @return void
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public static function sendInviteUserSuccess(User $user, $title, $inviteeName, $createdAt, $count)
    {
        $msgData = [
            'thing2' => $title,
            'thing3' => $inviteeName,
            'character_string5' => $count,
            'time4' => $createdAt
        ];

        $templateId = config('wechatTemplateMessage.invite_user_success_template_id');
        OfficialAccountService::getInstance()->sendTemplateMessage($user['official_openid'], $templateId, $msgData);
    }
}
