<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 15:05
 * Email: jiangliang@tanwan.com
 * Desc: 判断一个数是否是素数，一个数只能被1和本身整除，所以该数如果不能被2~这个数的平方根整除就是素数.
 */

class Solution
{
    public static function isPrime($num)
    {
        $result = true;
        if ($num > 3) {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if($num % $i == 0) {
                    $result = false;
                    break;
                }
            }
        }

        return $result;
    }
}

var_dump(Solution::isPrime(4));