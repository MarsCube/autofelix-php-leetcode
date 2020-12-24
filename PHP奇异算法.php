<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: PHP奇异算法.
 */

class Solution
{
    public static function add() {
        $a = 1;
        $b = &$a;
        echo (++$a) + (++$b);
    }
}

Solution::add();