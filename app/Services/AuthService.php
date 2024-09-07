<?php

namespace App\Services;

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
}
