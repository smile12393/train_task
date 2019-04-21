<?php
/**
 * Created by PhpStorm
 * @author liuyj
 * @date 2019/4/21
 * @time 16:49
 */

namespace Silence;

class MaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        echo "男广告";
    }

    public function showCategory()
    {
        echo "男类目";
    }
}