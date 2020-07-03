<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 14:36
 * Email: jiangliang@tanwan.com
 * Desc: 删除链表中重复的元素.
 */

class Solution {

    public static function deleteDuplicates($head) {
        $head_arr = explode('->', $head);
        return implode('->', array_unique($head_arr));
    }

}

echo Solution::deleteDuplicates("1->1->2->3->3");