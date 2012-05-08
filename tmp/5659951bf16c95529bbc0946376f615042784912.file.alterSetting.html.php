<?php /* Smarty version Smarty-3.0.8, created on 2012-05-06 16:14:15
         compiled from "E:\wamp\www\spblog/tpl\alterSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:156294fa6a357344640-33878519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5659951bf16c95529bbc0946376f615042784912' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/tpl\\alterSetting.html',
      1 => 1336283041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156294fa6a357344640-33878519',
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
   <P>基本设置：</P><form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'setting','a'=>'updateSetting'),$_smarty_tpl);?>
" method="POST">
   <p>副标题：<input type="text" name="title"></p>
   <p><input type="submit" value="保存更改"></p></form>
</body>
</html>