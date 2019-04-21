<?php
/**
 * 策略模式 讲特定行为封装成类，调用时候先传入策略，实现解耦
 * 可实现Ioc,依赖倒置、控制反转
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 16:45
 */
namespace Silence;

interface UserStrategy
{
    public function showAd();

    public function showCategory();
}