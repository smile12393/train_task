<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/17
 * @time 17:26
 */

use Silence\UserORM;

define('BASEDIR', __DIR__);
include BASEDIR . '/Silence/Autoload.php';
spl_autoload_register('\\Silence\\Autoload::autoload');

//Silence\Factory::createDataBase();

//Silence\Object::oneTest();
//APP\Controller\Home\Index::index();

// 单例模式获取实例
//$db = Silence\DataBase::getInstance();

// 注册模式获取对象
//$db = Silence\Register::get('mysqlDB');

//适配器模式创建对象
/*$db = new Silence\Database\MySQLi();
$db->connect('127.0.0.1', 'root', '', 'train_task');
$db->query("show databases");
$db->close();*/

// 策略模式使用
/*class Page
{
    protected $strategy;

    public function index()
    {
        echo '广告';
        $this->strategy->showAd();

        echo "\n";
        echo '类目';
        $this->strategy->showCategory();
    }

    public function setStrategy(\Silence\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page();
$sex = '女';
if ($sex == '女') {
    $strategy = new Silence\FemaleUserStrategy();
} else {
    $strategy = new Silence\MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index();*/

// 数据对象映射模式
$user = new UserORM(1);
// 读取
var_dump($user->name);
// 写入
$user->mobile = '15311431111';
$user->name = 'test1';
$user->regtime = date('Y-m-d H:i:s');
