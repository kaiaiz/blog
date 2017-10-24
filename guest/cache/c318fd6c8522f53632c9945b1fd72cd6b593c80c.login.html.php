<?php
/* Smarty version 3.1.31, created on 2017-10-24 07:59:07
  from "D:\wamp64\www\project\blog\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59eef2cb831569_27152956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a52266bf97d47063366b8be99eba1d9e67ef8ad' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\admin\\login.html',
      1 => 1508831941,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59eef2cb831569_27152956 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href='http://localhost/project/blog/static/admin/css/login.css'>
</head>
<body>
  <section class="center">
    <p class="left">欢迎使用后台管理</p>
    <div class="right">
      <form action="">
        <p>登录到后台</p>
        <input type="text" placeholder="用户名" name='username' />
        <input type="text" placeholder="密码" name='password' />
        <div>
        <input type="text" placeholder="验证码" name='verification' />
        <img src="index.php?m=admin&f=login&a=verification" width="50%" height="100%" onclick="this.src='index.php?m=admin&f=login&a=verification'" alt="验证码">
        </div>
        <button type="submit">登陆</button>
      </form>
    </div>
  </section>
</body>
</html><?php }
}
