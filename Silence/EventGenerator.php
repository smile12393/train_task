<?php
/**
 * 观察者模式，当一个对象发生时，依赖他的其他对象会收到通州，并自动更新，实现了低耦合，非侵入式的通知和更新
 * Created by PhpStorm
 * @author liuyj
 * @date 2019-08-04
 * @time 17:15
 */

namespace Silence;

abstract class EventGenerator
{
    private $observers = [];

    // 添加观察者
    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}