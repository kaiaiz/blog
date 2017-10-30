<?php
header('content-Type:text/html;charset:utf8');
class timeline
{
    public function init()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('css', STATIC_URL.'index/css/');
        $smarty->assign('js', STATIC_URL.'index/js/');
        $smarty->assign('img', STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/timeline.html');
    }
    public function timelinet()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('css', STATIC_URL.'index/css/');
        $smarty->assign('img', STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/timelinet.html');
    }
    public function comment()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('css', STATIC_URL.'index/css/');
        $smarty->assign('img', STATIC_URL.'index/img/');
        $smarty->display(TPL_PATH.'index/comment.html');
    }
}
