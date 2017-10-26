<?php
/* Smarty version 3.1.31, created on 2017-10-26 08:13:11
  from "D:\wamp64\www\project\blog\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f19917574ba5_46332790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab3a9096e792b83aeddf9de7a6c439e571c8baea' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\index\\header.html',
      1 => 1508924530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f19917574ba5_46332790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1204059f1991756fb06_22209242';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
header.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['iconfont']->value;?>
">
</head>

<body>
  <!-- header start -->
  <header class="top">
    <main class="content">
      <a href="" class="left">
        <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo" height="40px" alt="">
      </a>
      <ul class="caption">
        <li>
          <a href="" class="active">首页</a>
        </li>
        <li>
          <a href="">说说</a>
        </li>
        <li>
          <a href="">留言板</a>
        </li>
        <li>
          <a href="">访客</a>
        </li>
        <li>
          <a href="">用户中心
          </a>
          <ul>
            <li>
              <a href="">
                <span class="iconfont">&#xe62b;</span>
                <span>我的主页</span>
              </a>
            </li>
            <li>
              <a href="">
                <span class="iconfont">&#xe61b;</span>
                <span>收藏的文章</span>
              </a>
            </li>
            <li>
              <a href="">
                <span class="iconfont">&#xe628;</span>
                <span>喜欢的文章</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="search">
        <form action="">
          <div>
            <input type="text" placeholder="请输入关键字">
            <button type="submit" class="iconfont">
              <span class="iconfont">&#xe61e</span>
            </button>
          </div>
        </form>
      </div>
    </main>
  </header>
  <!-- header end -->
  <div class="head"></div><?php }
}
