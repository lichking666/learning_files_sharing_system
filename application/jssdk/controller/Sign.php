<?php
/**
 * Created by PhpStorm.
 * User: wanqianjun
 * Date: 2017/4/11
 * Time: 下午9:35
 */

namespace app\jssdk\controller;
use EasyWeChat\Foundation\Application;
require_once $_SERVER['DOCUMENT_ROOT'] . '/extend/wechat-master/vendor/autoload.php';


class Sign
{
    public function Index()
    {
        $option = require_once $_SERVER['DOCUMENT_ROOT'] . '/extend/wechat-master/config.php';
        $app = new Application($option);
        $js = $app->js;
        return json($js->config(["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo","onMenuShareQZone"]));
    }
}