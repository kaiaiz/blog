<?php
header('content-Type:text/html;charset:utf8');
class settings
{
    public function init()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('css', STATIC_URL.'index/css/');
        $smarty->assign('js', STATIC_URL.'index/js/');
        $smarty->assign('img', STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/settings.html');
    }
    public function settingsfirst()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('css', STATIC_URL.'index/css/');
        $smarty->assign('js', STATIC_URL.'index/js/');
        $smarty->assign('img', STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/settingsfirst.html');
    }
    public function settingsprofile()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('css', STATIC_URL.'index/css/');
        $smarty->assign('js', STATIC_URL.'index/js/');
        $smarty->assign('img', STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/settingsprofile.html');
    }
}
