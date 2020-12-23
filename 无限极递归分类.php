<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 无限极递归分类.
 */

class Solution
{
    public static function tree ($arr, $pid=0, $level=0)
    {
        static $list = [];
        foreach ($arr as $v)
        {
            if ($v['pid'] == $pid)
            {
                $v['level'] = $level;
                $list[] = $v;
                self::tree($arr,$v['id'],$level+1);
            }
        }
        return $list;
    }
}

Solution::tree();