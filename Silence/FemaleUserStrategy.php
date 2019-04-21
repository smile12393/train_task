<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 16:47
 */

namespace Silence;


class FemaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        echo "女广告";
    }

    public function showCategory()
    {
        echo "女类目";
    }
}