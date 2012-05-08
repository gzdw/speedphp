<?php

     class setting extends spController  {
	        function indexSetting() {
			  header('Content-Type: text/html;charset=UTF-8');
			  echo "<p>基本设置：</p>";
			  date_default_timezone_set('PRC');
			  $m_setting = spClass("m_setting");
			  if( $result = $m_setting->findAll() ){ 
					  $this->result = $result;
					  $this->display('');
				  } 
				}
			var_dump($result);
			//$this->num = 3;
			echo "<p><a href=".spUrl('setting', 'writeSetting').">增加信息</a></p>";
	}
	
	function time(){
		header('Content-Type: text/html;charset=UTF-8');
		$m_setting= spClass("m_setting");
		echo data("Y-m-d ,H:i:s");
	}
		 
	  
	        function writeSetting () {
			 header('Content-Type: text/html;charset=UTF-8');
		     $m_setting= spClass("m_setting");
			 $this->display('writeSetting.html');
			 }
			 
			function createSetting() {
		      header('Content-Type: text/html;charset=UTF-8');
		      $m_setting = spClass("m_setting");
			  $i = $this->spArgs("i");
			  $newrow = array( 
			  'title'=>$_POST['title'],);
		      $m_setting->create($newrow);
			  //$m_setting->create($this->spArgs());
		      $connectindex = spUrl("setting" ,"indexSetting");
	          $this->jump($connectindex,0.5);
		    }
            function alterSetting(){
		      header('Content-Type: text/html;charset=UTF-8');
		      $i = $this->spArgs("i");
		      $m_setting = spClass("m_setting");
		      $yuan= array('i' => $i);
		      $result = $m_setting->find($yuan);
		      $data1 = array( $result['i'],$result['title'] );
		      spAccess('w' , 'data2', $data1, -1);
		     $this->display('alterSetting.html');
		}
	        function updateSetting(){
		      header('Content-Type: text/html;charset=UTF-8');
		      $m_setting = spClass("m_setting");
              $data3 = spAccess('r' , 'data2');		
		      $conditions = array('i' =>$data3[0],'title'=>$data3[1]); 
		      $newrow = array('title'=> $_POST['title']);
		      $m_setting->update($conditions, $newrow);		// 更新记录	
		      $connectindex = spUrl("setting" ,"indexSetting");
	          $this->jump($connectindex,0.5);
		}
	 }	   
   
?>		 
			
	  