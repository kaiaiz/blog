<?php
class index
{
    public function init()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('css', STATIC_URL.'index/css/index.css');
        $smarty->assign('logo', STATIC_URL.'index/img/logo.png');
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('img',STATIC_URL.'index/img/article01.png');
        $smarty->display(TPL_PATH.'index/signup.html');
    }
}
