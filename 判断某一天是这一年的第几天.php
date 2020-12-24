<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 判断某一天是这一年的第几天
 */

class Solution
{
    public function verdictDays($date) {
        $date = $this->parse($date);
        $dateArr = explode('-', $date);
        $days = (int)$dateArr[1];
        for($i = 1; $i <= (int)$dateArr[0]; $i++) {
            $days += cal_days_in_month(CAL_GREGORIAN, $i, date('Y'));
        }
        return $days;
    }

    /**
     * 统一格式化日期
     * @param $date
     * @return null|string|string[]
     */
    private function parse($date) {
        return preg_replace("/[.\/\|]/", '-', $date);
    }
}

echo (new Solution)->verdictDays('03/05');