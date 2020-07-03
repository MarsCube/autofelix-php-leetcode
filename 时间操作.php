<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 10:12
 * Email: jiangliang@tanwan.com
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