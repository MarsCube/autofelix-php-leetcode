<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 时间操作.
 */

class Solution
{
    public static function parse()
    {
        echo json_encode([
            '上月第一天' => date("Y-m-01", strtotime('-1 month')),
            '上月最后一天' => date("Y-m-t", strtotime('-1 month')),
        ]);
    }
}

Solution::parse();