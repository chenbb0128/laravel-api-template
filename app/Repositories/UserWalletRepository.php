<?php

namespace App\Repositories;

class UserWalletRepository
{
    /**
     * @var UserRepository
     */
    private $model;

    private static $instance;

    public function __construct() {
        $this->model = new UserRepository();
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

    /**
     * 根据用户id获取钱包信息
     * @param $userId
     * @return mixed
     */
    public function getByUserId($userId)
    {
        return $this->model->where('user_id', $userId)
            ->select([
                'id',
                'extract_buy_money',
                'extracting_buy_money',
                'extracted_buy_money',
                'extract_invite_money',
                'extracting_invite_money',
                'extracted_invite_money',
                'extract_agent_money',
                'extracting_agent_money',
                'extracted_agent_money',
            ])
            ->first();
    }
}
