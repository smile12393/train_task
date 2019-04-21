<?php
/**
 * 数据对象映射模式
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 17:13
 */

namespace Silence;

class UserORM
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    protected $db;

    public function __construct($id)
    {
        $this->db = new Database\MySQLi();
        $this->db->connect('127.0.0.1', 'root', '', 'train_task');
        $res = $this->db->query("select * from user limit 1");
        $data = $res->fetch_assoc();

        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }

    public function __destruct()
    {
        $this->db->query("update user set 
        name = '{$this->name}',
        mobile = '{$this->mobile}',
        regtime = '{$this->regtime}'
        where id ={$this->id} limit 1");
    }
}
