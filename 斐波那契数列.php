<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
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