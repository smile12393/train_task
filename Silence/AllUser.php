<?php
/**
 * 迭代器模式 不需要了解内部实现前提，可以遍历集合对象的内部元素
 * Created by PhpStorm
 * @author liuyj
 * @date 2019-08-04
 * @time 18:45
 */

namespace Silence;

// 迭代器实现需要继承PHP标志类库中的迭代器接口
use Silence\Database\MySQLi;

class AllUser implements \Iterator
{
    protected $ids;
    protected $index;
    protected $data = [];

    function __construct()
    {
        $db = new MySQLi();
        $db->connect('127.0.0.1:33060', 'homestead', 'secret', 'train_task');
        $result = $db->query("select id from user");
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    // 验证是否还有下一个
    function valid()
    {
        return $this->index < count($this->ids);
    }

    // 下一个元素
    function next()
    {
        $this->index ++;
    }

    // 当前元素
    function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    // 重置迭代器
    function rewind()
    {
        $this->index = 0;
    }

    // 迭代器的位置
    function key()
    {
        return $this->index;
    }
}