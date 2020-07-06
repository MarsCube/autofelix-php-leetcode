<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/6
 * Time: 17:25
 * Email: jiangliang@tanwan.com
 * Desc: 斐波那契数列.
 */

class Solution
{
    public static function fibonacci($n)
    {
        if($n = 1) {
            return 1;
        } elseif($n = 1) {
            return 1;
        } else {
            return self::fibonacci($n-1) + self::fibonacci($n-2);
        }
    }
}

echo Solution::fibonacci(10);