<?php

namespace App\Repositories;

use App\Repositories\Models\User;

class UserRepository
{
    public function model()
    {
        return new User();
    }

    public function getAll()
    {
        return $this->model()->all();
    }
}
