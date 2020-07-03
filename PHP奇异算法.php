<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 11:01
 * Email: jiangliang@tanwan.com
 * Desc: PHP奇异算法.
 */

class Solution
{
    public static function add()
    {
        $a = 1;
        $b = &$a;
        echo (++$a) + (++$b);
    }
}

Solution::add();