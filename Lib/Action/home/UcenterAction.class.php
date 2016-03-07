<?php

class UcenterAction extends Action{
	public function usercenter(){
		$this->display();
	}

	public function getInfo(){
		if($_GET){
			$uid=$_GET['uid'];
			$userObj=D('Users');
			$personalInfo=$userObj->getInfoByUid($uid);
			if($personalInfo!=-1){
				echo json_encode(array('personalInfo'=> $personalInfo));
			}else{
				echo -1;
			}
		}
	}
}