<?php

class passage extends spController {
	
	// 
	function index() {
		//$this->result = spClass('m_passage')->find();
        $m_passage = spClass('m_passage');
		if($m_passage -> findall() == NULL)
		{	
			echo"
			<p><h1>数据库里没有数据，请添加数据!</h1></p>";
		}
		else
		{
			$result = $m_passage->findAll() ;
			$this->result = $result;
			//var_dump($this->result);
			$this->display('indexpassage.html');
		}
		//$this -> display('passage_edit.html');
		echo "<a href=".spUrl('passage', 'add').">增添文章</a>";//echo "<br><a href='index.php?c=passage&a=addPassage'>增添文章</a>";  
		//echo "<form method=passageaction=".spUrl()."><a href=".spUrl('passage', 'listPassage')">查找文章</a></form>";
	}
	
	
	
	// 保存文章
	function save () {
		//var_dump($_passage);
		$alterid = $this->spArgs('id');
		$alterpassage = $this->spArgs('passage');
		$_passage = $this->spArgs();
		$conditions = array('id' => $alterid);
		$row = array(
			'title' => $_passage['title'] || "默认标题",
			'author' =>$_passage[ 'author'] ,
			'passagetime' => date('Y-m-d H:i:s'),
			'passage' => $_passage['passage'],
		);
		$m_passage = spClass('m_passage');
			if($m_passage->update($conditions, $row))
			{	echo"提交成功！";
				
			}
	
	}
	
	
	
	function add() {
		$this -> submit_url = spUrl('passage', 'addPassage');
		$this -> display('admin_post_add.html');
	}
	
	
	
	
	//增添文章
	function addPassage (){
		$_passage = $this->spArgs();//获取传来的值
	    $newrow = array(
			'title' => $_passage['title'] || "默认标题",
			'author' =>$_passage[ 'author'] ,
			'passagetime' => date('Y-m-d H:i:s'),
			'passage' => $_passage['passage'],
			
		 );
		$m_passage = spClass('m_passage');
		if($m_passage -> create($newrow))
		{
			echo "增添成功！";}
		$this->jump (spUrl("passage" ,"index"),2);
		
			
	}
	
	
	
	//删除文章
    function deletePassage (){
		header("Content-type: text/html; charset=utf-8");
		$m_passage = spClass('m_passage');
		$deleteid = $this->spArgs("id");
		$conditions = array('id' => $deleteid);
			if($m_passage -> delete($conditions)){
				echo "已成功删除文章！";
				$this->jump (spUrl("passage" ,"index"),1);
			} else { 
				echo "请确定是否存在此文章！";
				$this->jump (spUrl("passage" ,"index"),1);
			}	
	}
	
	
	
	//修改文章
    function editPassage () {
		header("Content-type: text/html; charset=utf-8");
		$alterid = $this->spArgs("id");
		//$editPassage = $this->spArgs("passage");
		//var_dump($alterid, $editPassage);
		//$conditions = array('id' => $alterid );
		//$row = array('passage'=>$editPassage);
		//$m_passage = spClass('m_passage');
			//if($m_passage->update($conditions, $row))
			//{	echo"修改成功！";
				//$this->jump (spUrl("passage" ,"index"),1);
			//}
		$db_passage= spClass('m_passage');
		if ($result = $db_passage->find(array('id'=> $alterid))) {
			$this->result = $result;
			$this->submit_url = spUrl('passage','save');
			$this->display('passage_edit.html');
		}
			echo "<a href=".spUrl('passage', 'index').">返回</a>";
	}
	
	//查找文章
	function listPassage () {
		header("Content-type: text/html; charset=utf-8");
		$m_passage = spClass('m_passage');
		$title = $this -> spArgs ("title");
		$connectdata = array('title' => $title);
		$result = $m_passage->findAll();
		echo"<p>标题：{$connectdata['title']}</p>";
		foreach($result as $value)
		{	
			if($value['title'] == $connectdata['title'])
			{	
				/*echo "<table>
				<tr><td>作者：{$value['author']}</td>
				<td>分类：{$value['category']}</td>
				<td>文章：{$value['passage']}</td>
				<td>时间：{$value['passagetime']}</td></tr></table>";*/
				$this -> display("listPassage.html");
			}
		
		}
		echo "<a href=".spUrl('passage', 'index').">返回</a>";
	
	
	
	}
	}
