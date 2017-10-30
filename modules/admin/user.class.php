<?php
class user
{
    public function init()
    {
        $smarty=new Smarty_Guest();
            $smarty->assign('css', STATIC_URL.'admin/css/');
            $smarty->assign('js', STATIC_URL.'admin/js/');
            $smarty->display(TPL_PATH.'admin/user.html');
    }
}
