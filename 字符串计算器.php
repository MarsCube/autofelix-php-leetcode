<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
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