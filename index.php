<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/17
 * @time 17:26
 */

define('BASEDIR', __DIR__);
include BASEDIR . '/Silence/Autoload.php';
spl_autoload_register('\\Silence\\Autoload::autoload');

Silence\Object::oneTest();
APP\Controller\Home\Index::index();