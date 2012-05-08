<?php /* Smarty version Smarty-3.0.8, created on 2012-05-08 15:05:41
         compiled from "E:\wamp\www\spblog/template\module_header.html" */ ?>
<?php /*%%SmartyHeaderCode:276194fa93645284eb7-63473754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a495ff7c946f2a2b1a6daacff5138743d41621b' => 
    array (
      0 => 'E:\\wamp\\www\\spblog/template\\module_header.html',
      1 => 1336488991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276194fa93645284eb7-63473754',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'manage','a'=>'index'),$_smarty_tpl);?>
">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="http://www.medialoot.com">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>John Doe (<a href="#"><?php echo $_smarty_tpl->getVariable('num')->value;?>
 Messages</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->