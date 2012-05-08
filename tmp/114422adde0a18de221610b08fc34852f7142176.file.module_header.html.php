<?php /* Smarty version Smarty-3.0.8, created on 2012-05-08 14:17:11
         compiled from "E:\wamp\www\spblog/tpl\module_header.html" */ ?>
<?php /*%%SmartyHeaderCode:51274fa92ae703f727-64422674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '114422adde0a18de221610b08fc34852f7142176' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/tpl\\module_header.html',
      1 => 1336468763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51274fa92ae703f727-64422674',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znManage','a'=>'index'),$_smarty_tpl);?>
">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="http://www.medialoot.com">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>John Doe (<a href="#">3 Messages</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->