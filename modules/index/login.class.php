<?php
class index
{
    public function init()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('css', STATIC_URL.'index/css/');
        $smarty->assign('js', STATIC_URL.'index/js/');
        $smarty->assign('logo', STATIC_URL.'index/img/');
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('img',STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/login.html');
    }
}
