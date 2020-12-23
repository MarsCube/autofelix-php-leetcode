<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 返回数字插入有序数组的索引 .
 */

class Solution {
    public static function searchInsert($nums, $target) {
        $search_points = array_search($target, $nums);
        if ( $search_points !== false ) {
            return $search_points;
        } else {
            $points = 0;
            while ($target) {
                if(array_search($target--, $nums) !== false) {
                    $points = $search_points + 1;
                    break;
                }
            }
            return $points;
        }
    }
}

echo Solution::searchInsert([1,3,5,6], 2);