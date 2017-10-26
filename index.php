<?php
header('Content-Type:text/html;charset:utf8');
define('WEB', 'true');//判断口令
include_once('libs/autoPath.php');
// 导入数据库配置
$config=include_once('config.php');
//导入数据库类库
include_once(LIBS_PATH.'mysql.class.php');
$mysql=new Mysql($config);
//导入路由类库
include_once(LIBS_PATH.'route.class.php');
// 导入模板引擎
// include(SMARTY_PATH.'Smarty.class.php');
include_once('setup.php');
//进入路由
$route =new route();
$route->set();//注意引入路由的操作是在所要导向的文件之前，所以任何路由之后定义的操作不能在导向文件中实现.比如定义全局变量。


