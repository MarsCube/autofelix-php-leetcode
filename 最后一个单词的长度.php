<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 14:38
 * Email: jiangliang@tanwan.com
 * Desc: 最后一个单词的长度.
 */

class Solution {
    public static function lengthOfLastWord($s) {
        if ($s == '') {
            return 0;
        }

        return strlen(substr( $s, strripos($s, ' ') + 1 ));
    }
}

echo Solution::lengthOfLastWord(' ');