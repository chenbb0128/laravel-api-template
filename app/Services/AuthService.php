<?php

namespace App\Services;

use App\Repositories\Models\User;
use App\Repositories\UserRepository;
use App\Services\Wechat\WeappService;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class AuthService
{
    public function accountLogin(string $username, string $password): string
    {
        $presentGuard = Auth::getDefaultDriver();
        $token = Auth::guard('api')->claims(['guard' => $presentGuard])
            ->attempt(['username' => $username, 'password' => $password]);

        if ($token) {
            $user = Auth::user();
            // 单点登录支持
            if ($user->last_token) {
                try {
                    Auth::guard('admin')->setToken($user->last_token)->invalidate();
                } catch (TokenExpiredException $e) {
                    // 因为让一个过期的token再失效，会抛出异常，所以我们捕捉异常，不需要做任何处理
                }
            }

            $user->last_token = $token;
            $user->save();

            return $token;
        }

        throw new \Exception('账号或密码错误');
    }

    /**
     * 微信小程序登陆
     * @param string $code
     * @return string
     * @throws \App\Exceptions\RequestFailException
     * @throws \EasyWeChat\Kernel\Exceptions\HttpException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function weappLogin(string $code): string
    {
        $weappInfo = WeappService::getInstance()->login($code);
        $user = UserRepository::getInstance()->getByUnionid($weappInfo['unionid']);
        // 新增用户
        if (empty($user)) {
            $userData = [
                'unionid' => $weappInfo['unionid'],
                'weapp_openid' => $weappInfo['openid'],
                'avatar' => 'https://thirdwx.qlogo.cn/mmopen/vi_32/POgEwh4mIHO4nibH0KlMECNjjGxQUq24ZEaGT4poC6icRiccVGKSyXwibcPq4BWmiaIGuG1icwxaQX6grC9VemZoJ8rg/132',
                'name' => '小程序用户'
            ];

            $user = UserRepository::getInstance()->save($userData);
        }

        $presentGuard = Auth::getDefaultDriver();
        return Auth::guard('api')->claims(['guard' => $presentGuard])->fromUser($user);
    }
}
