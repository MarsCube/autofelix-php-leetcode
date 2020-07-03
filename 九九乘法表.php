<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 10:19
 * Email: jiangliang@tanwan.com
 * Desc: 九九乘法表.
 */

class Solution
{
    public static function create()
    {
        for ($i = 1; $i <= 9; $i++)
        {
            for ($j = 1; $j <= $i; $j++)
            {
                echo $j . '*' . $i . '=' . $i * $j . PHP_EOL;
            }
            echo "<br />";
        }
    }
}

Solution::create();