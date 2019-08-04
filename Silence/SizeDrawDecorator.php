<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019-08-04
 * @time 18:22
 */

namespace Silence;


class SizeDrawDecorator implements DrawDecorator
{
    protected $size;

    function __construct($size = '14px')
    {
        $this->size = $size;
    }

    function beforeDraw()
    {
        echo "<div style='font-size: {$this->size}'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}