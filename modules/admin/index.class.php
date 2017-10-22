<?php
session_start();
class index
{
    public function init()
    {
        // if (empty($_SESSION['login'])) {
            // echo '<script>location.href="index.php?m=admin&f=login";</script>';
        // }else{
            $smarty=new Smarty_Guest();
            $smarty->assign('css',STATIC_URL.'admin/css/index.css');
            $smarty->assign('iconfont',STATIC_URL.'admin/iconfont/iconfont.css');
            $smarty->display(TPL_PATH.'admin/index.html');
        // }
    }
}
