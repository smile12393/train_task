<?php
/**
 * 单例模式：无论多少次调用都只创建一个实例对象
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 15:23
 */

namespace Silence;

class DataBase
{
    protected static $db;

    // 构造方法私有，外部不可new对象，保证单例
    private function __construct()
    {

    }

    // 获取实例
    static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        } else {
            self::$db = new self();
            return self::$db;
        }
    }

    function where($where)
    {
        return $this;
    }


}