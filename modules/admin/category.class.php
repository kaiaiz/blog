<?php
class category
{
    public function add()
    {
            $smarty=new Smarty_Guest();
            $smarty->assign('js', STATIC_URL.'admin/js/');
            $smarty->assign('css', STATIC_URL.'admin/css/');
            $smarty->assign('iconfont', STATIC_URL.'admin/iconfont/iconfont.css');
            $smarty->display(TPL_PATH.'admin/categoryAdd.html');
    }
    public function manager()
    {
        $result=$GLOBALS['mysql']->table('category')->getAll();
            $smarty=new Smarty_Guest();
            $smarty->assign('js', STATIC_URL.'admin/js/');
            $smarty->assign('css', STATIC_URL.'admin/css/');
            $smarty->assign('iconfont', STATIC_URL.'admin/iconfont/iconfont.css');
            $smarty->assign('result', $result);
            $smarty->display(TPL_PATH.'admin/categoryManager.html');
    }
    public function addCategory()
    {
        $cname=isset($_POST['cname'])?$_POST['cname']:'';
        $cpower=isset($_POST['cpower'])?$_POST['cpower']:'';
        $cthumb=isset($_POST['cthumb'])?$_POST['cthumb']:'';
        $cnav=isset($_POST['cnav'])?$_POST['cnav']:'';
        $cinfo=isset($_POST['cinfo'])?$_POST['cinfo']:'';
        $GLOBALS['mysql']->table('category')->insert("$cname,$cpower,$cthumb,$cinfo,$cnav");
    }
}
