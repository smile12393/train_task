<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 15:50
 */

namespace Silence\Database;

use Silence\InterDB;

class MySQLi implements InterDB
{
    protected $conn;

    function connect($host, $user, $pwd, $dbName)
    {
        $this->conn = mysqli_connect($host, $user, $pwd, $dbName);
    }

    function query($sql)
    {
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    function close()
    {
        mysqli_close($this->conn);
    }

}