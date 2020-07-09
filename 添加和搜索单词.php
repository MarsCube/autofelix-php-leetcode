<?php
/**
 * Created by PhpStorm.
 * User: Jiangliang
 * Date: 2020/7/9
 * Time: 15:41
 * Email: jiangliang@tanwan.com
 * Desc: 数据结构 - 添加和搜索单词.
 */

class WordDictionary
{
    private $dict = [];

    public function __construct()
    {
    }

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
