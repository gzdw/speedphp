<?php /* Smarty version Smarty-3.0.8, created on 2012-05-08 14:20:59
         compiled from "E:\wamp\www\spblog/template\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:107904fa92bcbf24e17-53729588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87a4f70bca25908c8aa78a35716c966492ab8866' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/template\\admin_index.html',
      1 => 1336486856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107904fa92bcbf24e17-53729588',
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
	<link rel="stylesheet" href="/spblog/template/css/ie.css" type="text/css" media="screen" />
	<script src="/spblog/template/js/html5.js"></script>
	<![endif]-->
	<script src="/spblog/template/js/common/jquery-1.7.2.min.js"></script>
    <script src="/spblog/template/js/common/jquery-ui-1.8.20.custom.min.js"></script>
    <script src="/spblog/template/js/common/jquery.tablesorter.min.js"></script>
    <script src="/spblog/template/js/common/jquery.equalHeight.js"></script>
    <script src="/spblog/template/js/common/init.js"></script>
    <script>
        
    </script>
</head>

<body>
    <!-- include module_header.html -->
    <?php $_template = new Smarty_Internal_Template("module_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

    <!-- include module_aside.html -->
    <?php $_template = new Smarty_Internal_Template("module_aside.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    
    <section id="main" class="column">       
        <!-- include module_chart.html -->
        <?php $_template = new Smarty_Internal_Template("module_chart.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        
        <!-- include module_comment.html -->
        <?php $_template = new Smarty_Internal_Template("module_comment.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        
        <!-- include module_message.html -->
        <?php $_template = new Smarty_Internal_Template("module_message.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        
        <!-- include module_micro_article.html -->
        <?php $_template = new Smarty_Internal_Template("module_post_micro.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        
        <!-- 参考样式部分（可删） -->
        <article class="module width_full">
			<header><h3>Basic Styles</h3></header>
				<div class="module_content">
					<h1>Header 1</h1>
					<h2>Header 2</h2>
					<h3>Header 3</h3>
					<h4>Header 4</h4>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<ul>
						<li>Donec ullamcorper nulla non metus auctor fringilla. </li>
						<li>Cras mattis consectetur purus sit amet fermentum.</li>
					</ul>
				</div>
		</article><!-- end of styles article -->

        <h4 class="alert_warning">A Warning Alert</h4>
		<h4 class="alert_error">An Error Message</h4>
		<h4 class="alert_success">A Success Message</h4>
        
		<div class="spacer">&nbsp;</div>
        <!-- 参考样式部分（可删） -->
    </section> <!-- end section#main -->
</body>