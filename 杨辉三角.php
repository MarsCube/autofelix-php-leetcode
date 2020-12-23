<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 杨辉三角.
 */

class Solution
{
    public static function Triangle($n)
    {
        $arr = [];
        for ($i = 1; $i <= $n; $i++)
        {
            for ($j = 1; $j <= $i; $j++)
            {
                if ($j == 1 || $i == $j)
                {
                    echo $arr[$i][$j] = 1;
                } else {
                    echo $arr[$i][$j] = $arr[$i-1][$j-1] + $arr[$i-1][$j];
                }
                echo PHP_EOL;
            }
            echo "<br />";
        }
    }
}

Solution::Triangle(7);