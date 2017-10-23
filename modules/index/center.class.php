<?php
header('content-Type:text/html;charset:utf8');
class center{
  public function init(){
        $smarty=new Smarty_Guest();
        $smarty->assign('headerCss',STATIC_URL.'index/header.html');
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('css',STATIC_URL.'index/css/');
        $smarty->assign('img',STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/center.html');
  }
}