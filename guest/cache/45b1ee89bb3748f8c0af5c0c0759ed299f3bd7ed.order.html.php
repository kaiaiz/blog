<?php
/* Smarty version 3.1.31, created on 2017-10-26 10:19:30
  from "D:\wamp64\www\project\blog\template\index\order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1b6b28278e8_42151955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab8b19e2c854eb1e0a0b3d12cbdcdd52901a9985' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\index\\order.html',
      1 => 1509012929,
      2 => 'file',
    ),
    'ab3a9096e792b83aeddf9de7a6c439e571c8baea' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\index\\header.html',
      1 => 1508924530,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f1b6b28278e8_42151955 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="http://localhost/project/blog/static/index/css/header.css">
  <link rel="stylesheet" href="http://localhost/project/blog/static/index/iconfont/iconfont.css">
</head>

<body>
  <!-- header start -->
  <header class="top">
    <main class="content">
      <a href="" class="left">
        <img src="http://localhost/project/blog/static/index/img/logo" height="40px" alt="">
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
  <div class="head"></div>
<!-- 购书单 -->
<link rel="stylesheet" href="http://localhost/project/blog/static/index/css/order.css">
<!-- market start -->
<div class="market">
  <main class="content">
    <div class="header">
      <h2>购物车</h2>
    </div>
    <div class="section">
      <ul>
        <li>
          <a href="" target="goods" class="active">全部商品
            <span>(1)</span>
          </a>
        </li>
      </ul>
      <div class="list">
        <iframe src="index.php?m=index&f=goods" frameborder="0" name="goods"></iframe>
      </div>
    </div>
  </main>
</div>
<!-- market end -->
<!-- cart-fixed start -->
<div class="cart-fixed">
  <main class="conten">
    <div class="cart-footer">
      <div class="action">
        <label for="">
          <span class="iconfont checkbox">&#xe649;</span>
          <span>全选</span>
        </label>
      </div>
      <div class="info"></div>
    </div>
  </main>
</div>
<!-- cart-fixed end -->
<script src="http://localhost/project/blog/static/index/js/order.js"></script>
</body>

</html><?php }
}
