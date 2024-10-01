<?php

namespace App\Repositories;

use App\Repositories\Models\User;

class UserRepository
{

    /**
     * @var User
     */
    private $model;

    private static $instance;

    public function __construct() {
        $this->model = new User();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function model()
    {
        return $this->model;
    }

    public function getAll()
    {
        return $this->model()->all();
    }

    public function getByUnionid($unionid)
    {
        return $this->model()->where('unionid', $unionid)->first();
    }

    public function save($userData)
    {
        return $this->model->create($userData);
    }
}
