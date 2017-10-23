<?php
class details{
  public function init(){
        $smarty=new Smarty_Guest();
        $smarty->assign('headerCss',STATIC_URL.'index/header.html');
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('detailsCss',STATIC_URL.'index/css/details.css');
        $smarty->assign('img',STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/details.html');
  }
}