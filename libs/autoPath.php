<?php
// 物理文件位置
define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']);//服务器根目录
$appFull=$_SERVER['SCRIPT_FILENAME'];
$pos=strrpos($appFull,'/');
define('APP_PATH',substr($appFull,0,$pos).'/');//应用根目录
define('LIBS_PATH',APP_PATH.'libs/');
define('MODULES_PATH',APP_PATH.'modules/');
define('TPL_PATH',APP_PATH.'template/');
define('SMARTY_PATH',LIBS_PATH.'smarty/');
define('STATIC_PATH',APP_PATH.'static/');
define('GUEST_PATH',APP_PATH.'guest/');
//服务器路径
$protocal=$_SERVER['SERVER_PROTOCOL'];
$pos=strrpos($protocal,'/');
$protocal=strtolower(substr($protocal,0,$pos));
define('PROTOCAL',$protocal);
define('HOST',$_SERVER['HTTP_HOST']);
define('HTTP_URL',PROTOCAL.'://'.HOST.substr($_SERVER['REQUEST_URI'],0,strrpos($_SERVER['REQUEST_URI'],'/')).'/');
define('STATIC_URL',HTTP_URL.'static/');
// define('CSS_URL',HTTP_URL.'static/');
// define('IMG_URL',HTTP_URL.'static/');
// define('JS_URL',HTTP_URL.'static/');