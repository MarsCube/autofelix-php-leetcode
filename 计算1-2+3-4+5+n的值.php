<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 计算1-2+3-4+5-6+7……+N.
 */

class Solution
{
    public static function compute($n)
    {
        $expression = 0;
        for($i = 1; $i <= $n; $i++)
        {
            if($i % 2 == 0)
            {
                $expression -= $i;
            } else {
                $expression += $i;
            }
        }
        return $expression;
    }
}

Solution::compute(100);