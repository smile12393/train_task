<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019-08-04
 * @time 19:19
 */

namespace Silence;


interface IUser
{
    function getUserName($id);
    function setUserName($id, $name);
}