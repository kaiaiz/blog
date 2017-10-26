<?php
class writerr
{
    public function init()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('css', STATIC_URL.'index/css/');
        $smarty->assign('js', STATIC_URL.'index/js/');
        $smarty->assign('iconfont', STATIC_URL.'index/iconfont/iconfont.css');
        $smarty->assign('img', STATIC_URL.'index/img/');
        $smarty->assign('edit',HTTP_URL.'ueditor/');
        $smarty->display(TPL_PATH.'index/writerr.html');
    }
}