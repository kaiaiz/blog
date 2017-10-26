<?php
/* Smarty version 3.1.31, created on 2017-10-26 04:10:13
  from "D:\wamp64\www\project\blog\template\index\writerr.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f16025329da4_59312560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6a52b75c584243b2a2ba6f78a63c160b13aac8a' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\index\\writerr.html',
      1 => 1508990482,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f16025329da4_59312560 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="http://localhost/project/blog/static/index/css/writerr.css">
  <link rel="stylesheet" href="http://localhost/project/blog/static/index/css/bootstrap.min.css">
</head>

<body>
  <!-- form start -->
  <form class="form-horizontal">
    <div class="form-group special">
      <label for="inputEmail3" class="col-sm-2 control-label">文章标题</label>
      <div class="col-sm-10 caption">
        <input type="email" class="form-control info" id="inputEmail3" placeholder="无标题文章">
      </div>
    </div>
    <div class="form-group special">
      <label for="inputPassword3" class="col-sm-2 control-label">文章金额</label>
      <div class="col-sm-10 caption">
        <input type="password" class="form-control info" id="inputPassword3" placeholder="文章金额">
      </div>
    </div>
    <div class="special">
      文章权限：
      <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <script id="container" name="scon" type="text/plain">
      输入内容
    </script>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10 sub">
        <button type="submit" class="btn btn-default">发布文章</button>
      </div>
    </div>
  </form>
  <!-- form end -->

  <!-- 配置文件 -->
  <script type="text/javascript" src="http://localhost/project/blog/ueditor/ueditor.config.js"></script>
  <!-- 编辑器源码文件 -->
  <script type="text/javascript" src="http://localhost/project/blog/ueditor/ueditor.all.js"></script>
  <!-- 实例化编辑器 -->
  <script type="text/javascript">
    var ue = UE.getEditor('container');
  </script>
</body>

</html><?php }
}
