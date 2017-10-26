<?php
/* Smarty version 3.1.31, created on 2017-10-26 10:00:12
  from "D:\wamp64\www\project\blog\template\index\writer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1b22c8ce3f2_45576621',
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
  'includes' => 
  array (
  ),
),false)) {
function content_59f1b22c8ce3f2_45576621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2104259f1b22c804a52_57209894';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['iconfont']->value;?>
">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
writer.css">
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery-3.2.1.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
writer.js"><?php echo '</script'; ?>
>
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
