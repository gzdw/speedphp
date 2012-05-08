<?php

class manage extends spController {
	
	function index() 
	{
		$this->display('admin_index.html');
	}
	
	
	function submit() 
	{
		$this->jump('manage');
	}
	
};