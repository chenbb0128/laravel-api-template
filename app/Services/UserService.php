<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function getAllUser()
    {
        $userRepository = new UserRepository();
        return $userRepository->getAll();
    }
}
