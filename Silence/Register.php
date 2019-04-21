<?php
/**
 * 注册机模式：对象创建时注册到全局树，使用时可根据别名直接get
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 15:35
 */
namespace Silence;

class Register
{
    protected static $objects;

    /**
     * 注册对象，可以给对象取统一别名
     * @param $alias
     * @param $object
     *
     * @author liuyj
     * @date 2019/4/21
     * @time 15:44
     */
    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    /**
     * 根据别名获取对象
     * @param $alias
     *
     * @return mixed
     * @author liuyj
     * @date 2019/4/21
     * @time 15:45
     */
    public static function get($alias)
    {
        return self::$objects[$alias];
    }

    /**
     * 注销对象
     * @param $alias
     *
     * @author liuyj
     * @date 2019/4/21
     * @time 15:45
     */
    public static function objUnset($alias)
    {
        unset(self::$objects[$alias]);
    }
}