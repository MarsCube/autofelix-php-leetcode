<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 快乐数.
 * 每个位数拆开,无限平方和等于1就是快乐数
 * 例如： 19
 * 1^2 + 9^2 = 82
 * 8^2 + 2^2 = 68
 * 6^2 + 8^2 = 100
 * 1^2 + 0^2 + 0^2 = 1
 */

class Solution
{
    /**
     * @param $num
     * @return bool
     */
    public static function isHappyNum($num) {
        static $arr = [];
        array_push($arr, $num);

        $num_arr = str_split($num);
        $total = 0;
        foreach ($num_arr as $item) {
            $total += pow($item,2);
        }

        return $total == 1 ? true : (in_array($total, $arr) ? false : static::isHappyNum($total));
    }
}

var_dump(Solution::isHappyNum(13));