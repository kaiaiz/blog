<?php
header('Content-Type:text/html;charset:utf8');
define('WEB','true');//判断口令
include_once('libs/autoPath.php');
// 导入数据库配置
include_once('config.php');
//导入数据库类库
include(LIBS_PATH.'mysql.class.php');
//导入路由类库
include(LIBS_PATH.'route.class.php');
// 导入模板引擎
include(SMARTY_PATH.'Smarty.class.php');
//进入路由
$route =new route();
$route->set();