<?php
// [ 应用入口文件 ]
if (!defined('__ROOT__')) {
    $_root = rtrim(dirname(rtrim($_SERVER['SCRIPT_NAME'], '/')), '/');
    define('__ROOT__', (('/' == $_root || '\\' == $_root) ? '' : $_root));
}
// 定义应用目录
define("APP_PATH", dirname(dirname(__FILE__)));
//加载配置
$app = new Yaf_Application(APP_PATH . "/conf/app.ini");
//启动应用
$app->bootstrap()->run();