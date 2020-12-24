<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 常见排序算法.
 */

class Solution
{
    /**
     * 冒泡排序
     * @param $arr
     * @return mixed
     */
    public static function bubbleSort($arr) {
        $len = count($arr);
        for($i=1; $i<$len; $i++) {
            for($k=0; $k<$len-$i; $k++) {
                if($arr[$k] > $arr[$k+1]) {
                    $tmp=$arr[$k+1];
                    $arr[$k+1]=$arr[$k];
                    $arr[$k]=$tmp;
                }
            }
        }
        return $arr;
    }

    /**
     * 选择排序
     * @param $arr
     * @return mixed
     */
    public static function electSort($arr) {
        $len=count($arr);
        for($i=0; $i<$len-1; $i++) {
            $p = $i;
            for($j=$i+1; $j<$len; $j++) {
                if($arr[$p] > $arr[$j])
                {
                    $p = $j;
                }
            }
            if($p != $i) {
                $tmp = $arr[$p];
                $arr[$p] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
        return $arr;
    }

    /**
     * 插入排序
     * @param $arr
     * @return mixed
     */
    public static function insertSort($arr) {
        $len=count($arr);
        for($i=1; $i<$len; $i++) {
            $tmp = $arr[$i];
            for($j=$i-1;$j>=0;$j--) {
                if($tmp < $arr[$j]) {
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $tmp;
                } else {
                    break;
                }
            }
        }
        return $arr;
    }


    /**
     * 快速排序
     * @param $arr
     * @return array
     */
    public static function quickSort($arr) {
        $len = count($arr);

        if($len <= 1) {
            return $arr;
        }

        $base_num = $arr[0];
        $left_array = [];
        $right_array = [];
        for($i=1; $i<$len; $i++) {
            if($base_num > $arr[$i]) {
                $left_array[] = $arr[$i];
            } else {
                $right_array[] = $arr[$i];
            }
        }
        $left_array = self::quickSort($left_array);
        $right_array = self::quickSort($right_array);
        return array_merge($left_array, array($base_num), $right_array);
    }
}

$arr = [1,43,54,62,21,66,32,78,36,76,39];

echo json_encode([
    '冒泡排序' => Solution::bubbleSort($arr),
    '选择排序' => Solution::electSort($arr),
    '插入排序' => Solution::insertSort($arr),
    '快速排序' => Solution::quickSort($arr),
]);