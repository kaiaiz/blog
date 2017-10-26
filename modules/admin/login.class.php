<?php
session_start();
class login
{
    public function init()
    {
        $smarty=new Smarty_Guest();
        $smarty->assign('css', STATIC_URL.'admin/css/login.css');
        $smarty->assign('js', STATIC_URL.'admin/js/');
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
        $code->setNoiseLine()->setNoisePoint()->setFontNum()->setFontSize()->setFontAngle()->setFontFamily(STATIC_PATH.'admin/font/font.ttf')->createImage();//类似字体等调用内地文件用file协议，css，img，html，js等使用的是http协议
    }
    public function check()
    {
      // 1.口令验证
        $verification=strtolower($_POST['verification']);
        if (!$verification==$_SESSION['verification']) {
            $message='验证码错误';
            $url='../index/signup.php';
            include 'dock.php';
        }
        $username=$_POST['username'];
        $password=$_POST['password'];
        $aname=addslashes(htmlspecialchars($_POST["username"]));
        $apass = md5($_POST["password"]);
        $sql="select * from admin where aname={$username} and apass={$password}";
        $result=$GLOBALS['mysql']->getRow('select * from admin');
        if ($result) {
            $_SESSION["login"]="true";
            $_SESSION["uid"]=$result["uid"];
            echo "location.href='index.php?m=admin'</script>";
        } else {
            $tip="登陆失败";
            $url="../index/login.php";
            // include "../public/message.php";
            echo $tip;
        }
    }
}
