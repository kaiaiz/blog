<?php
/* Smarty version 3.1.31, created on 2017-10-23 11:11:44
  from "D:\wamp64\www\project\blog\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59edce704b8186_41417638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c14656816194d910e5ea861495a33548942b46d5' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\admin\\index.html',
      1 => 1508757058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59edce704b8186_41417638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '856359edce700a6224_13234920';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['iconfont']->value;?>
">
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery-3.2.1.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
index.js"><?php echo '</script'; ?>
>
</head>

<body>
  <!-- nav start -->
  <nav role="navigation" class="system">
    <ul>
      <li class="nav-header">
        <div class="logo-element">后台</div>
      </li>
      <li class="menu">
        <a href="#">
          <span class="iconfont icon-shezhi"></span>
        </a>
        <ul class="second-level"></ul>
      </li>
      <li class="menu">
        <a href="#">
          <span class="iconfont icon-huiyuanguanli"></span>
        </a>
        <ul class="second-level"></ul>
      </li>
      <li class="menu">
        <a href="#">
          <span class="iconfont icon-fenleihuanluntai"></span>
        </a>
        <ul class="second-level"></ul>
      </li>
      <li class="menu">
        <a href="#">
          <span class="iconfont icon-wenzhangguanli"></span>
        </a>
        <ul class="second-level"></ul>
      </li>
      <li class="menu">
        <a href="#">
          <span class="iconfont">&#xe6bf;</span>
        </a>
        <ul class="second-level"></ul>
      </li>
    </ul>
  </nav>
  <!-- nav end -->
  <!-- page start -->
  <section class="page">
    <div class="top">
      <button class="btn-primary">
        <span class="iconfont">&#xe7e2;</span>
      </button>
    </div>
    <div class="content-tabs">
      <nav class="page-tabs">
        <ul>
          <li class="active">
            <a href="">首页</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="maincontent"></div>
  </section>
  <!-- page end -->
</body>

</html><?php }
}
