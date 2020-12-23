<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 水仙花数是一个三位数，并且各个数的立方和等于自身.
 */

class Solution
{
    public static function daffodilNum()
    {
        $result = [];
        for ($i = 100; $i <= 999; $i++)
        {
            $i = (string)$i;
            if ( (pow($i[0], 3) + pow($i[1], 3) + pow($i[2], 3)) == $i ) {
                $result[] = $i;
            }
        }

        return $result;
    }
}

echo json_encode(Solution::daffodilNum());