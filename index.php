<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/17
 * @time 17:26
 */

use Silence\Factory;
use Silence\UserORM;

define('BASEDIR', __DIR__);
include BASEDIR . '/Silence/Autoload.php';
spl_autoload_register('\\Silence\\Autoload::autoload');

//Silence\Object::oneTest();
//APP\Controller\Home\Index::index();

// 工厂模式
//Silence\Factory::createDataBase();

// 单例模式获取实例
//$db = Silence\DataBase::getInstance();

// 注册模式获取对象
//$db = Silence\Register::get('mysqlDB');

//适配器模式创建对象
/*$db = new Silence\Database\MySQLi();
$db->connect('127.0.0.1:33060', 'homestead', 'secret', 'train_task');
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
/*$user = new UserORM(1);
// 读取
var_dump($user->name);
// 写入
$user->mobile = '15311431111';
$user->name = 'test1';
$user->regtime = date('Y-m-d H:i:s');*/

// 结合使用数据对象映射模式、工厂模式、注册器模式
/*class Page
{
    public function index()
    {
        $user = Silence\Factory::getUser(1);
        // var_dump($user);
        $user->name = 'indexTest';

        $this->test();
    }

    public function test()
    {
        $user = Silence\Factory::getUser(1);
        // var_dump($user);
        $user->mobile = '15311432222';
    }
}

$page = new Page();
$page->index();*/

// 观察者模式
/*class Event extends \Silence\EventGenerator
{
    function trigger()
    {
        echo "Event\n";
        $this->notify();
    }
}

class Observer1 implements \Silence\Observer
{
    function update($event_info = null)
    {
        echo "逻辑1处更新\n";
    }
}

class Observer2 implements \Silence\Observer
{
    function update($event_info = null)
    {
        echo "逻辑2处更新\n";
    }
}
$event = new Event;
$event->addObserver(new Observer1);
$event->addObserver(new Observer2);
$event->trigger();*/

// 原型模式 先创建好一个原型对象，然后通过clone原型对象来创建新的对象
/*$protoType = new \Silence\Canvas();
$protoType->init();

$canvas1 = clone $protoType;
$canvas1->rect(3, 6, 4, 12);
$canvas1->draw();

echo "======================================================\n";

$canvas2 = clone $protoType;
$canvas2->rect(2, 3, 1, 6);
$canvas2->draw();*/

// 装饰器模式 可以动态添加修改类的功能
/*$protoType = new \Silence\Canvas();
$protoType->init();

$protoType->addDecorator(new \Silence\ColorDrawDecorator('blue'));
$protoType->addDecorator(new \Silence\SizeDrawDecorator('10px'));

$protoType->rect(3, 6, 4, 12);
$protoType->draw();*/

// 迭代器模式
/*$users = new \Silence\AllUser();
foreach ($users as $user) {
    var_dump($user->name);
    $user->name = 'name_'. $user->id . '_' . time();
}*/

// 代理模式
$proxy = new \Silence\Proxy();
$proxy->getUserName(1);
$proxy->setUserName(1, 'name1');

