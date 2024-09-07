<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

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
}
