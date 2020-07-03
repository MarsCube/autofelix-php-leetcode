<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 9:43
 * Email: jiangliang@tanwan.com
 * Desc: 有一母牛，到4岁可生育，每年一头，所生均是一样的母牛，到15岁绝育，不再能生，20岁死亡，问n年后有多少头牛.
 */


/**
 * Class Solution
 * 年份 1    2    3     4    5    6     7    8    9
 *
 *                                    / 1 => 1 => 1
 *                    / 1 => 1 => 1 =>
 *                    /               \ 1 => 2 => 3
 *      1 => 1 => 1 =>     / 1 => 1 =>  1 => 2 => 3
 *                    \ 1 =>    / 1 =>  1 => 1 => 2
 *                         \ 1 =>     / 1 => 1 => 1
 *                              \ 1 =>
 *                                    \ 1 => 2 => 3
 *数量  1    1     1     2    3    4     6    9   13
 */
class Solution
{
    public static function cowTotal($n)
    {
        static $num = 1;
        if ($n > 3) {
            for ($i = 4; $i <= $n; $i++)
            {
                $i++;
            }
        }
        return $num;
    }
}

echo Solution::cowTotal(7);