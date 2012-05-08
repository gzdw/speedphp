<?php /* Smarty version Smarty-3.0.8, created on 2012-05-06 15:46:47
         compiled from "E:\wamp\www\spblog/tpl\indexpassage.html" */ ?>
<?php /*%%SmartyHeaderCode:52314fa69ce7bcf059-02528896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02ec1214346bdf0189bb4f655c02dd8727600b0c' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/tpl\\indexpassage.html',
      1 => 1336285912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52314fa69ce7bcf059-02528896',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
    <title>文章管理系统</title>
	<meta charset="utf-8" />
</head>
<body>
    <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'passage','a'=>'index'),$_smarty_tpl);?>
" method="post">
     <table>
			<tr>
			<th>排序</th>
			<th>标题</th>
			<th>作者</th>
			<th>分类</th>
			<th>删除文章</th>
			<th>修改文章</th>
			<th>日期</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</td>
				<td name=""><?php echo $_smarty_tpl->tpl_vars['value']->value['category'];?>
</td>
				<td><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'passage','a'=>'deletePassage','id'=>$_tmp1),$_smarty_tpl);?>
">删除文章</td>
				<td><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['value']->value['passage'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'passage','a'=>'editPassage','id'=>$_tmp2,'passage'=>$_tmp3),$_smarty_tpl);?>
">修改文章</td>
				
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['posttime'];?>
</td>
			</tr>
			<?php }} ?>	
			</table>
    </form>
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'passage','a'=>'listPassage'),$_smarty_tpl);?>
" method="post"> 
		<input type="text" name="title" id="title" /> 
		<input type="submit" value="查找" />
	</form>
</body>
</html>