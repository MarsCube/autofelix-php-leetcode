<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/9
 * Time: 10:40
 * Email: jiangliang@tanwan.com
 * Desc: 字符串计算器.
 */
class Solution
{
    public static function calculate($s)
    {
        //方法一
        //echo exec('php -r "echo '.$s.';"');

        //方法二
        system('php -r "echo '.$s.';"');
    }
}

Solution::calculate("3+2*2");