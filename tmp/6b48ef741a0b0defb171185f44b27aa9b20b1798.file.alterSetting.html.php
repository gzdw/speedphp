<?php /* Smarty version Smarty-3.0.8, created on 2012-05-08 14:43:31
         compiled from "E:\wamp\www\spblog/template\alterSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:2674fa93113043207-96733348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b48ef741a0b0defb171185f44b27aa9b20b1798' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/template\\alterSetting.html',
      1 => 1336283041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2674fa93113043207-96733348',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>alterSetting Page</title>
</head>
<body>
   <P>基本设置：</P><form action="{spUrl c=setting a=updateSetting}" method="POST">
   <p>副标题：<input type="text" name="title"></p>
   <p><input type="submit" value="保存更改"></p></form>
</body>
</html>