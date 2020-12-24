<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 最后一个单词的长度.
 */

class Solution {
    public static function lengthOfLastWord($s) {
        return $s == '' ? 0 : strlen(substr( $s, strripos($s, ' ') + 1 ));
    }
}

echo Solution::lengthOfLastWord(' ');