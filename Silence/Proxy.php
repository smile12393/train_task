<?php
/**
 * 在客户端和实体之间建立一个代理对象，客户端对实体的操作都委派给代理对象
 * Created by PhpStorm
 * @author liuyj
 * @date 2019-08-04
 * @time 19:15
 */

namespace Silence;


use Silence\Database\MySQLi;

class Proxy implements IUser
{
    function getUserName($id)
    {
        $db = new MySQLi();
        // 从库
        $db->connect('127.0.0.1:33060', 'homestead', 'secret', 'train_task');
        $db->query("select name from user where id = $id limit 1");
    }

    function setUserName($id, $name)
    {
        $db = new MySQLi();
        // 主库
        $db->connect('127.0.0.1:33060', 'homestead', 'secret', 'train_task');
        $db->query("update user set name = $name where id = $id limit 1");
    }
}