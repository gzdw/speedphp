<?php

	class page extends spController  {
						
		function index () {
			header("Content-type: text/html; charset=utf-8");
			
			$url1 = spUrl('page', 'create');
			echo "<br><a href='{$url1}'>新建页面</a>";
			
			$url2 = spUrl('page', 'listPage');
			echo "<br><a href='{$url2}'>管理页面</a>";
		}
		
		
	/***********新建页面************/	
	
		function create() {
			$this->display('createpage.html');
		}
	
	
		function createPage () {
			header("Content-type: text/html; charset=utf-8");
			$page = spClass('m_page');
			$newrow = array (			
				'title' => $this->spArgs('title'), 
				'author' => $this->spArgs('author'), 
				//'date' => $this->spArgs('date'), 
				'content' => $this->spArgs('content'),
			);
			$page->create($newrow);
			//$this->jump(spurl('page', 'createPageSuccess'));
			echo "页面发布成功";
			$this->jump (spUrl("page" ,"index"),1);
			
			//<a href=/createpage.html>返回</a>";
		}
		
	/***********页面列表************/	
	
		function listPage () {
			header("Content-type: text/html; charset=utf-8");
			$page = spClass(m_page);
			
			if( $result = $page->findAll() ){ 
					foreach($result as $value){ 
					$contenturl = spUrl("page", "showPage", array('id'=>$value['id'])); // 用spUrl制造查看留言内容页面地址，请注意array('id'=>$value['id'])将传递ID到查看页面，由spArgs来接收。
					$updateurl = spUrl("page", "update", array('id'=>$value['id']));
					$deleteurl = spUrl("page", "deletePage", array('id'=>$value['id']));
	                echo "<p>这里是第{$value['id']}个页面，标题：<a href={$contenturl} target=_blank>{$value['title']}</a>&nbsp;&nbsp;作者：{$value['author']}
					&nbsp;&nbsp;<a href={$updateurl} target=_blank>修改</a>&nbsp;&nbsp;<a href={$deleteurl} target=_blank>删除</a></p>";
	       	 	}
			}
			else echo"暂无页面";
		}
		
		
	/***********参看页面************/
	
		function showPage(){ 
			header("Content-type: text/html; charset=utf-8");
	        $id = $this->spArgs("id"); 
	        $page = spClass("m_page");  
	        $condition = array('id'=>$id); 
			$result = $page->find($condition); 
	        
	        echo "<p>标题：{$result['title']}</p>";
	        echo "<p>作者：{$result['author']}</p>";
			echo "<p>日期：{$result['date']}</p>";
			echo "<p>内容：{$result['content']}</p>";
	    }
	
	
	/***********修改页面************/
	
		function update(){
			$this->display('updatepage.html');
		}
		
		function updatePage() {
			header("Content-type: text/html; charset=utf-8");
			$id = $this->spArgs("id"); 	        
	        $condition = array('id'=>$id); 
			
			$newrow = array(
			'title' => $this->spArgs('updatetitle'),
			'author' => $this->spArgs('updateauthor'),
			'content' => $this->spArgs('updatecontent'),
			);

			$page = spClass("m_page");  
			$page->update($condition, $newrow); 
			//echo "修改成功";
			echo "页面修改成功";
			$this->jump (spUrl("page" ,"index"),1);
		}
	
	
	/***********删除页面************/

		function deletePage(){ 
			header("Content-type: text/html; charset=utf-8");
			$id = $this->spArgs("id"); 
	        $page = spClass("m_page");  
	        $condition = array('id'=>$id); 
			$page->delete($condition); 
			echo "已成功删除！";
			$this->jump (spUrl("page" ,"index"),1);
	}

	
		
		
	}	
