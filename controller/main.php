<?php
class main extends spController
{
	function index(){
		header("Content-type: text/html; charset=utf-8");
		
		echo "<br><a href=".spUrl('passage', 'index').">文章管理</a>";
		echo "<br><a href=".spUrl('page', 'index').">页面管理</a>";
		echo "<br><a href=".spUrl('setting', 'indexSetting').">设置管理</a>";
		echo "<br><a href=".spUrl('user').">sign up</a>";
	}
}