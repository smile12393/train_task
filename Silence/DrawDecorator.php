<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019-08-04
 * @time 18:18
 */

namespace Silence;


interface DrawDecorator
{
    function beforeDraw();
    function afterDraw();
}