<?php
class UsersModel extends Model{
	public function register($post){
		$unick=$post['nick'];
		$upassword=$post['password'];
		$uname=$post['name'];
		$umail=$post['mail'];
		$uaddress=$post['address'];
		$uzipcode=$post['zipcode'];
		$uphone=$post['phone'];
		$imgIndex=rand(1,54);
		$uphoto="heads/".$imgIndex.".gif";
		$rst=$this->where("unick='".$unick."'")->find();
		if($rst==null){
			$addData=array(
				'unick' => $unick,
				'upassword' => $upassword,
				'uname' => $uname,
				'umail' => $umail,
				'uaddress' => $uaddress,
				'uzipcode' => $uzipcode,
				'uphone' => $uphone,
				'uphoto' => $uphoto
			);
			//$sql="insert ignore into ";
			$rst=$this->add($addData);
			return $rst;
		}else{
			return '该帐号已存在！';
		}
	}
	public function login($unick,$upassword){
		$rst=$this->where("unick='".$unick."'")->find();
		if($rst!=null){
			if($upassword==$rst['upassword']){//登陆成功
				return $rst['uid'];
			}else{
				return '密码错误！';
			}
		}else{
			return '账号错误！';
		}
	}

	public function getInfoByUid($uid){
		$rst=$this->where("uid=".$uid)->find();
		if($rst){
			return $rst;
		}else{
			return -1;
		}
		
	}

	public function updPersonalInfo($postData){
		/*$addData=array(

		);*/
		$rst=$this->data($postData)->save();
		return $rst;
	}
}