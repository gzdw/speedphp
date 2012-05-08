<?php /* Smarty version Smarty-3.0.8, created on 2012-05-07 16:15:14
         compiled from "E:\wamp\www\spblog/tpl\createpage.html" */ ?>
<?php /*%%SmartyHeaderCode:185954fa7f512293542-22126231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f283b9efdea491271cbf1ed89d34085c85f1ee9' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/tpl\\createpage.html',
      1 => 1336286009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185954fa7f512293542-22126231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
    <title>创建页面</title>
	<meta charset="utf-8" />
</head>
<body>
    <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'page','a'=>'createPage'),$_smarty_tpl);?>
" method="POST">
	        <p>作者：<input type=text name='author' size=18></p>
	        <p>标题：<input type=text name='title' size=30></p>         
	        <p>页面内容：</p>
	        <p><textarea name=content cols=120 rows=18></textarea></p>
	        <p><input type=submit value=" 发布 "></p>
	</form>
</body>
</html>