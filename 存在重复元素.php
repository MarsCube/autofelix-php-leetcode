<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/9
 * Time: 14:15
 * Email: jiangliang@tanwan.com
 * Desc: 存在重复元素.
 */

class Solution
{
    public static function containsNearbyDuplicate($nums, $k)
    {
        $result = false;
        foreach ($nums as $key => $item) {
            $tmp = $item;
            unset($nums[$key]);
            if($otherKey = array_search( $tmp, $nums )) {
                if(abs($otherKey - $key) <= $k) {
                    $result = true;
                    break;
                };
            };
            $nums[$key] = $tmp;
        }
        return $result;
    }
}

var_dump(Solution::containsNearbyDuplicate([1,2,3,4,5,6,1], 5));