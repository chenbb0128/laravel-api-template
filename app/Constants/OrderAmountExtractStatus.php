<?php

namespace App\Constants;

class OrderAmountExtractStatus
{
    const FAIL_EXTRACT = -1;
    const NOT_EXTRACT = 0;
    const EXTRACTED = 1;

    private static $desc = [
        self::FAIL_EXTRACT => '提取失败',
        self::NOT_EXTRACT => '未提取',
        self::EXTRACTED => '已提取',
    ];

    public static function getDesc($key)
    {
        return self::$desc[$key] ?? '';
    }

    public static function getDescByValue($value)
    {

    }
}
