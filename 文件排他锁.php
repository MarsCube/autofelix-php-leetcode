<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 11:35
 * Email: jiangliang@tanwan.com
 * Desc: 文件排他锁.
 */


class Solution
{
    public static function lockWrite($path, $content, $mode = "w+")
    {
        $fp = fopen($path, $mode);
        if(flock($fp, LOCK_EX))
        {
            fwrite($fp, $content);
            flock($fp, LOCK_UN);
        } else {
            echo "this {$path} file is writing...";
        }
        fclose($fp);
    }
}

Solution::lockWrite('./test.json', "testing");