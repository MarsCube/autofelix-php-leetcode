<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 九九乘法表.
 */

class Solution
{
    public static function create() {
        for ($i = 1; $i <= 9; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j . '*' . $i . '=' . $i * $j . PHP_EOL;
            }
            echo "<br />";
        }
    }
}

Solution::create();