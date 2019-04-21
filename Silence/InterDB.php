<?php
/**
 * 适配器模式，实现统一接口，保证对外展示一致
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 15:57
 */
namespace Silence;

interface InterDB
{
    function connect($host, $user, $pwd, $dbName);
    function query($sql);
    function close();

}