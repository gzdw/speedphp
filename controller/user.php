<?php

class user extends spController {
	
	function index() 
	{
		$this->display('znUser.html');
	}
	
	
	function submit() 
	{
	
		$this->jump(spUrl('manage'));
	}
	
};