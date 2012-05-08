<?php /* Smarty version Smarty-3.0.8, created on 2012-05-08 14:24:05
         compiled from "E:\wamp\www\spblog/template\admin_post_add.html" */ ?>
<?php /*%%SmartyHeaderCode:153804fa92c8592b977-66696275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0fb80dec329f7d57e4ff4d0d2cb282f210077d0' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/template\\admin_post_add.html',
      1 => 1336486856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153804fa92c8592b977-66696275',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	<link rel="stylesheet" href="/spblog/template/css/reset.css" media="screen" />
    <link rel="stylesheet" href="/spblog/template/css/layout.css" media="screen" />
    <link rel="stylesheet" href="/spblog/template/css/jquery-ui-1.8.20.custom.css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="/spblog/template/js/html5.js"></script>
	<![endif]-->
	<script src="/spblog/template/js/common/jquery-1.7.2.min.js"></script>
	<script src="/spblog/template/js/common/jquery-ui-1.8.20.custom.min.js"></script>
	<script src="/spblog/template/js/common/jquery.tablesorter.min.js"></script>
    <script src="/spblog/template/js/common/jquery.equalHeight.js"></script>
    <script src="/spblog/template/js/common/init.js"></script>
</head>

<body>
    <!-- include module_header.html -->
    <?php $_template = new Smarty_Internal_Template("module_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

    <!-- include module_aside.html -->
    <?php $_template = new Smarty_Internal_Template("module_aside.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    
    <section id="main" class="column">
        
        <?php $_template = new Smarty_Internal_Template("module_post_add.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    </section> <!-- end section#main -->
</body>