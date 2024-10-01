<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function index(Request $request, UserService $userService)
    {
        $users = $userService->getAllUser();
        return $this->success($users);
    }

    public function login(Request $request)
    {

    }

    public function weappLogin(Request $request, AuthService $authService)
    {
        $code = $request->input('code');
        $token = $authService->weappLogin($code);

        return $this->success($token);
    }

    public function getUserInfo(Request $request)
    {
        $user = Auth::user();

        return $this->success($user);
    }

    public function getWalletInfo(Request $request, UserService $userService)
    {
        $user = Auth::user();
        if (empty($user)) {
            return $this->fail('用户不存在');
        }
        $walletInfo = $userService->getWalletInfo($user['id']);

        return $this->success($walletInfo);
    }
}
