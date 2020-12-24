<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 汇总区间.
 */

class Solution
{
    public static function summaryRanges($nums) {
        $count = count($nums);
        if ($count <= 1) return $nums;

        $result = [];
        $series = [];
        for ($i = 0; $i < $count; $i++) {
            if ($i > 0) {
                if ($nums[$i] - 1 == $nums[$i-1]) {
                    if ($series) {
                        $series = [
                            $series[0],
                            $nums[$i]
                        ];
                    } else {
                        $series = [
                            $nums[$i]
                        ];
                    }
                } else {
                    $result[] = implode('->', $series);
                    $series = [
                        $nums[$i]
                    ];
                }
            } else {
                $series = [
                    $nums[$i]
                ];
            }
        }

        if($series) $result[] = implode('->', $series);
        unset($series);

        return $result;
    }
}

echo json_encode(Solution::summaryRanges([0,2,3,4,6,8,9]));

