<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 学习成绩>=90分的同学用A表示，60-89分之间的用B表示，60分以下的用C表示.
 */

class Solution
{
    public static function level($score)
    {
        if ($score < 0 || $score > 100) return false;

        return $score >= 90 ? 'A' : ( $score >= 60 ? 'B' : 'C' );
    }
}

echo Solution::level(10);