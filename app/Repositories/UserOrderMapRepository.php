<?php

namespace App\Repositories;

use App\Repositories\Models\UserOrderMap;

class UserOrderMapRepository
{

    /**
     * @var UserOrderMap
     */
    private $model;

    private static $instance;

    public function __construct() {
        $this->model = new UserOrderMap();
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

    public function getNotExtractAmountByUserId($userId)
    {
        $this->model->where('user_id', $userId)
            ->where()
    }
}
