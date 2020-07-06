<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/6
 * Time: 16:42
 * Email: jiangliang@tanwan.com
 * Desc: a=10,b=15 在不用第三个变量的前提下交换a b的值.
 */

class Solution
{
    public static function exchange($a = 10, $b = 15)
    {
        //方法一
        list($a1, $b1) = [$b, $a];

        //方法二
        $str = "{$a},{$b}";
        $arr = explode(",", $str);
        $a2 = $arr[1];
        $b2 = $arr[0];

        //方法三字符串截取
        $a3 = substr($str, strlen($a) + 1, strlen($b));
        $b3 = substr($str, 0, strlen($a));

        return [
            '方法一' => [$a1, $b1],
            '方法二' => [$a2, $b2],
            '方法三' => [$a3, $b3]
        ];

    }
}

echo json_encode(Solution::exchange());
