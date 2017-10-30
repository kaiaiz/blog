<?php
class bookmarks{
  public function init(){
        $smarty=new Smarty_Guest();
        $smarty->assign('css',STATIC_URL.'index/css/');
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('img',STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/bookmarks.html');
  }
}