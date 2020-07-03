<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliang@tanwan.com
 * Desc: 文件夹遍历.
 */

class Solution
{
    public static function allFile($path = __DIR__, $level = 1)
    {
        if (is_dir($path) && is_readable($path)) {
            if($pd = opendir($path)) {
                while (($file = readdir($pd)) !== false) {
                    if($file != '.' && $file != '..') {
                        if (($subPath = $path . DIRECTORY_SEPARATOR . $file) && is_dir($subPath)) {
                            echo "<pre />";
                            echo '<span style="color: red;">' . str_repeat("--", $level) . $subPath . '</span>';
                            self::allFile($subPath, $level++);
                        } else {
                            echo "<pre />";
                            echo str_repeat("--", $level) . $subPath;
                        }
                    }
                }
            }
        } else {
            echo "{$path} is not a available dir";
        }
    }
}

Solution::allFile(__DIR__ . '/../tanwan-eden-com/');