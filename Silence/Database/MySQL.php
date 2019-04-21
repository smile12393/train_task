<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 15:50
 */

namespace Silence\Database;

use Silence\InterDB;

class MySQL implements InterDB
{
    protected $conn;

    function connect($host, $user, $pwd, $dbName)
    {
        $this->conn = mysql_connect($host, $user, $pwd);
        mysql_select_db($dbName, $this->conn);
    }

    function query($sql)
    {
        $res = mysql_query($sql, $this->conn);
        return $res;
    }

    function close()
    {
        mysql_close($this->conn);
    }

}