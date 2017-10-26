<?php
/* Smarty version 3.1.31, created on 2017-10-26 10:00:12
  from "D:\wamp64\www\project\blog\template\index\writer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1b22ca7e4e4_36616919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0d44931d00640f359948290b004c39c1bf5e3a0' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\index\\writer.html',
      1 => 1509004132,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f1b22ca7e4e4_36616919 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="http://localhost/project/blog/static/index/iconfont/iconfont.css">
  <link rel="stylesheet" href="http://localhost/project/blog/static/index/css/writer.css">
  <script src="http://localhost/project/blog/static/index/js/jquery-3.2.1.js"></script>
  <script src="http://localhost/project/blog/static/index/js/writer.js"></script>
</head>

<body>
  <!-- 文章发布 -->
  <div class="left">
    <div class="home">
      <a href="">
        <span>回到首页</span>
        <span></span>
      </a>
    </div>
    <div class="new">
      <a href="">
        <span class="iconfont"></span> 新建分类 
      </a>
      <div class="add">
        <form action="">
          <input type="text" placeholder="请输入分类名" autocomplete="off" />
          <input type="submit">
          <a href="">取消</a>
        </form>
      </div>
    </div>
    <ul class="list">
      <li><a class="cate" href="index.php?m=index&f=writerc&id=1" target="center">日记本</a></li>
      <li><a class="cate" href="index.php?m=index&f=writerc&id=1" target="center">大事记</a></li>
    </ul>
  </div>
  <div class="center">
    <iframe name="center" frameborder=0></iframe>
  </div>
  <div class="right">
    <iframe name="right" frameborder=0></iframe>
  </div>
</body>

</html><?php }
}
