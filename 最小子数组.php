<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 最小子数组.
 */


class Solution
{
    public static function minSubArrayLen($s, $nums) {
        $count = count($nums);
        $result = 0;
        for ($i = 1; $i <= $count; $i++) {
            foreach ($nums as $key => $num) {
                if(( $count - $key ) >= $i) {
                    $chunk_arr = array_slice($nums, $key, $i);
                    if(array_sum($chunk_arr) >= $s) {
                        $result = count($chunk_arr);
                        break;
                    }
                }
            }

            if($result) break;
        }

        return $result;
    }
}

echo json_encode(Solution::minSubArrayLen(7, [2,3,4,5,6,7]));