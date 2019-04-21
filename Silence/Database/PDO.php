<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 15:50
 */

namespace Silence\Database;

use Silence\InterDB;

class PDO implements InterDB
{
    protected $conn;

    function connect($host, $user, $pwd, $dbName)
    {
        $this->conn = new \PDO("mysql:host=$host;dbname=$dbName", $user, $pwd);
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }

}