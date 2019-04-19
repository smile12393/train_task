<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/18
 * @time 17:46
 */

namespace Silence;

class Autoload
{
    static function autoload($class)
    {
        require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}