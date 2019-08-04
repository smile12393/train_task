<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019-08-04
 * @time 17:19
 */
namespace Silence;

interface Observer
{
    function update($event_info = null);
}