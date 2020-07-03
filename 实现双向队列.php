<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/3
 * Time: 11:43
 * Email: jiangliang@tanwan.com
 * Desc: 实现双向队列.
 */
class Solution
{
    /**
     * @var array
     */
    private $queue = [];


    /**
     * 队列头部添加
     * @param $item
     * @return int
     */
    public function addFirst($item)
    {
        return array_unshift($this->queue, $item);
    }

    /**
     * 队列尾部添加
     * @param $item
     * @return int
     */
    public function addLast($item)
    {
        return array_push($this->queue, $item);
    }

    /**
     * 移除头部元素
     * @return mixed
     */
    public function rmFirst()
    {
        return array_shift($this->queue);
    }

    /**
     * 移除尾部元素
     * @return mixed
     */
    public function rmLast()
    {
        return array_pop($this->queue);
    }
}

$solution = new Solution();

echo json_encode([
    "addFirst" => $solution->addFirst("queue_item"),
    "addLast" => $solution->addLast("queue_item"),
    "rmFirst" => $solution->rmFirst(),
    "rmLast" => $solution->rmLast(),
]);
