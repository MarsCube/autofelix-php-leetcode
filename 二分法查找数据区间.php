<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 16:58
 * Email: jiangliang@tanwan.com
 * Desc: 二分法查找数据区间.
 */

class Solution
{
    public static function binSearch($x, $a)
    {
        $c = count($a);
        $lower = 0;
        $high = $c-1;
        while ( $lower <= $high )
        {
            $middle = intval(($lower + $high) / 2 );
            if ( $a[$middle] >= $x )
            {
                $high = $middle - 1;
            } elseif ( $a[$middle] <= $x )
            {
                $lower = $middle + 1;
            }
        }

        return "在区间{$a[$high]}到{$a[$lower]}";
    }
}

echo Solution::binSearch(120, [1, 50, 100, 150, 200, 250, 300]);