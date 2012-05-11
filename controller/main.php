<?php
class main extends spController
{
	function index(){
		header("Content-type: text/html; charset=utf-8");
		echo "<br><a href=".spUrl('user').">sign up</a>";
	}
}