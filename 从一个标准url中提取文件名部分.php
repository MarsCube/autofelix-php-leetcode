<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 从一个标准url中提取文件名部分.
 */

class Solution
{
    public static function getUrlFileBaseName($url) {
        $urlArr = parse_url($url);
        $file = explode('.', basename($urlArr['path']));
        return $file[0];
    }
}

echo Solution::getUrlFileBaseName("http://staticres.693975.com/static/platform/v2/doc/监护人信息表.doc");