<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/6
 * Time: 17:10
 * Email: jiangliang@tanwan.com
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