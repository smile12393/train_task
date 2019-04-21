<?php
/**
 * 工厂模式：不直接new对象，而是通过工厂工厂统一生产
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 15:19
 */
namespace Silence;

class Factory
{
    static function createDataBase()
    {
        $db = Database::getInstance();

        // 注册对象
        Register::set('mysqlDB', $db);
        return $db;
    }
}