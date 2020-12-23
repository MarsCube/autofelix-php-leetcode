<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 向右移动指定单位后的数组.
 */

class Solution {
    public static function rotate(&$nums, $k) {
        $remainder = $k % count($nums);
        if ($remainder != 0) {
            $chunk_before = array_slice($nums, 0, $remainder + 1);
            $chunk_after = array_slice($nums, $remainder + 1);
            $nums = array_merge($chunk_after, $chunk_before);
        }
    }
}

$nums = [1,2,3,4,5];
Solution::rotate($nums, 12);
echo json_encode($nums);