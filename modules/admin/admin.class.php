<?php
class admin
{
    public function init()
    {

        $result=$GLOBALS['mysql']->table('admin')->getAll();

            $smarty=new Smarty_Guest();
            $smarty->assign('js', STATIC_URL.'admin/js/');
            $smarty->assign('css', STATIC_URL.'admin/css/');
            $smarty->assign('iconfont', STATIC_URL.'admin/iconfont/iconfont.css');
            $smarty->assign('result',$result);
            $smarty->display(TPL_PATH.'admin/admin.html');
    }
}
