<?php
session_start();
class login
{
    public function init()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('css', STATIC_URL.'admin/css/login.css');
        $smarty->display(TPL_PATH.'admin/login.html');
    }
    public function checkLogin()
    {
        $_SESSION['login']='true';
        echo '<script>location.href="index.php?m=admin&f=home";</script>';
    }
    public function verification()
    {
        include_once(LIBS_PATH.'verification.class.php');
        $code=new verification(125, 34);
        $code->setNoiseLine()->setNoisePoint()->setFontNum()->setFontSize()->setFontAngle()->setFontFamily(STATIC_PATH.'admin/font/font.ttf')->createImage();
    }
}
