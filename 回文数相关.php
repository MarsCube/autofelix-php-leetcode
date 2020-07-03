<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 10:38
 * Email: jiangliang@tanwan.com
 * Desc: 是否回文数.
 */

class Solution
{
    /**
     * 是否是回文数
     * @param $num
     * @return bool
     */
    public static function isPalindromicNum($num)
    {
        $result = true;
        $num = (string)$num;
        for ($i = 0; $i < (strlen($num)-1)/2; $i++)
        {
            if($num[$i] != $num[strlen($num) - ($i+1)]) {
                $result = false;
                break;
            }
        }
        return $result;
    }


    /**
     * 找到所有5位数中的回文数
     * @return array
     */
    public static function allPalindromicNum()
    {
        $result = [];
        for ($i = 10000; $i <= 99999; $i++) {
            $i = (string)$i;
            if($i[0] == $i[4] && $i[1] == $i[3]) {
                $result[] = $i;
            }
        }

        return $result;
    }
}

echo json_encode([
    "isPalindromicNum" => Solution::isPalindromicNum(12521),
    "allPalindromicNum" => Solution::allPalindromicNum()
]);