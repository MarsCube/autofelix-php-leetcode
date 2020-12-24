<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 有一只兔子，从出生后第3个月起每个月都生一只兔子，小兔子长到第四个月后每个月又生一只兔子，假如兔子都不死，问每个月的兔子总数为多少？   .
 */

/**
 * Class Solution
 * 月份 数量
 *  1    1
 *  2    1
 *  3    2
 *  4    3
 *  5    5
 * 可以看出 其实就是斐波那契数列
 */
class Solution
{
    public static function rabbit($month) {
        $result = [1, 1];
        if($month > 2) {
            for($i = 2; $i < $month; $i++) {
                $result[] = $result[$i-2] + $result[$i-1];
            }
        }

        return $result;
    }
}

echo json_encode(Solution::rabbit(7));