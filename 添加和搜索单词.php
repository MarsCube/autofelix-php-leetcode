<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 数据结构 - 添加和搜索单词.
 */

class WordDictionary
{
    private $dict = [];

    public function __construct() {}

    public function addWord($word)
    {
        $this->dict[] = $word;
    }

    public function search($word)
    {
        if(!$this->dict) return false;

        $result = true;
        foreach ($this->dict as $keyword)
        {
            foreach (str_split($word) as $key => $item)
            {
                if($item != '.' && substr($keyword, $key, 1) != $item) {
                    $result = false;
                    break;
                }
            }
        }
        return $result;
    }
}

$dict = new WordDictionary();
$dict -> addWord("bba");
$dict -> search("..b");
