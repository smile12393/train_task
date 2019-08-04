<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019-08-04
 * @time 18:22
 */

namespace Silence;


class ColorDrawDecorator implements DrawDecorator
{
    protected $color;

    function __construct($color = 'red')
    {
        $this->color = $color;
    }

    function beforeDraw()
    {
        echo "<div style='color: {$this->color}'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}