<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 数组中K个最大的元素.
 */
class Solution
{
    public static function findKthLargest($nums, $k)
    {
        $count = count($nums);
        for($i = 1; $i < $count; $i++)
        {
            for($j = 0; $j < $count - $i; $j++)
            {
                if ($nums[$j] > $nums[$j+1]) {
                    $tmp = $nums[$j+1];
                    $nums[$j+1] = $nums[$j];
                    $nums[$j] = $tmp;
                }
            }
        }

        return $nums[$count - $k];
    }
}

echo Solution::findKthLargest([3,2,3,1,2,4,5,5,6], 4);