<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 求s=a+aa+aaa+aaaa+aa...a的值，其中a是一个数字。例如2+22+222+2222+22222(此时共有5个数相加).
 */

class Solution
{
    public static function sum($a, $n)
    {

        $sum = [
            'total' => 0,
            'expression' => ''
        ];

        for ($i = 0; $i < $n; $i++)
        {
            $sum['expression'] .= $sum['expression'] ?  PHP_EOL . '+' . PHP_EOL . str_repeat($a, $i + 1) : str_repeat($a, $i + 1);

            for ($j = 0; $j <= $i; $j++)
            {
                $sum['total'] += $a * pow(10, $j);
            }
        }

        return $sum;
    }
}

echo json_encode(Solution::sum(9, 10));