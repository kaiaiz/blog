<?php
session_start();
class login{
  public function init(){
    $smarty=new Smarty_Guest();
    $smarty->assign('css',STATIC_URL.'admin/css/login.css');
    $smarty->display(TPL_PATH.'admin/login.html');
  }
  public function checkLogin(){
    $_SESSION['login']='true';
    echo '<script>location.href="index.php?m=admin&f=home";</script>';
  }
}