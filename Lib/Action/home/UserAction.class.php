<?php

class UserAction extends Action{
	public function login(){
		if($_POST){
			$unick=$_POST['nick'];
			$upassword=$_POST['password'];
			if(!empty($unick) && !empty($upassword)){
				$usersObj=D('Users');
				$rst=$usersObj->login($unick,$upassword);
				echo $rst;
			}else{
				echo '账号或密码不能为空！';
			}
			return;
		}
		$this->display();
	}

	public function register(){
		if($_POST){
			if(!empty($_POST['nick'])){
				if($_POST['password']==$_POST['repassword']){

					$usersObj=D('Users');
					$rst=$usersObj->register($_POST);//成功返回1
					if($rst>0){
						echo $rst;
					}else{
						echo '注册失败！';
					}
					
				}else{
					echo '两次输入的密码不正确！';
					return;
				}
			}else{
				echo '账号不能为空！';
			}
			
			return;
		}
		$this->display();
	}

	public function updInfo(){
		if($_POST){
			$type=$_POST['type'];
			if($type=='info'){
				$usersObj=D('Users');
				$rst=$usersObj->updPersonalInfo($_POST);
				echo $rst;
			}else if($type=='pwd'){
				if($_POST['upassword']==$_POST['repassword']){
					$uid=$_POST['uid'];
					$usersObj=D('Users');
					//$rst=$usersObj->where("uid=".$uid)->setField('upassword',$_POST['password']);
					$rst=$usersObj->data($_POST)->save();
					echo $rst;
				}else{
					echo '两次输入的密码不一致！';
				}
			}
		}
	}
}