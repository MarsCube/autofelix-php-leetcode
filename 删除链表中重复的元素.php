<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 删除链表中重复的元素.
 */

class Solution {

    public static function deleteDuplicates($head) {
        $head_arr = explode('->', $head);
        return implode('->', array_unique($head_arr));
    }

}

echo Solution::deleteDuplicates("1->1->2->3->3");