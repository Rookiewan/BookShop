<?php

class AdminAction extends Action{

	public function index(){
		$this->display();
	}
	public function login(){
		if($_POST){
			$adminName=$_POST['adminName'];
			$adminPwd=$_POST['adminPwd'];
			$adminObj=D('Admin');
			$rst=$adminObj->where("adminName='".$adminName."'")->find();
			if($rst){
				if($adminPwd==$rst['adminPwd']){
					echo 1;
				}else{
					echo '密码错误！';
				}
			}else{
				echo '该用户不存在！';
			}
			return;
		}
		$this->display();
	}

	public function getUserInfo(){
		$userObj=D('Users');
		$userInfo=$userObj->select();
		echo json_encode(array('userInfo' => $userInfo));
	}
	public function resetPwd(){
		if($_GET){
			$uid=$_GET['uid'];
			$userObj=D('Users');
			$rst=$userObj->where("uid=".$uid)->setField('upassword','123456');
			echo $rst;
		}
	}
	public function delUser(){
		if($_GET){
			$uid=$_GET['uid'];
			$userObj=D('Users');
			$rst=$userObj->where("uid=".$uid)->delete();
			echo $rst;
		}
	}

	public function getBookInfo(){
		$bookObj=D('Bookinfo');
		$bookInfo=$bookObj->select();
		echo json_encode(array('bookInfo'=>$bookInfo));
	}
	public function getCommentInfo(){
		$commentObj=D('Comment');
		$userObj=D('Users');
		$bookObj=D('Bookinfo');
		$commentInfo=$commentObj->select();
		$count=count($commentInfo);
		for($i=0;$i<$count;$i++){
			$userinfo=$userObj->where("uid=".$commentInfo[$i]['uid'])->find();
			//show_bug($userinfo);
			if($userinfo){
				$commentInfo[$i]['unick']=$userinfo['unick'];
			}
			$bookinfo=$bookObj->where("bid=".$commentInfo[$i]['bid'])->find();
			if($bookinfo){
				$commentInfo[$i]['bname']=$bookinfo['bname'];
			}
		}

		echo json_encode(array('commentInfo' => $commentInfo));
	}
	public function getOrderInfo() {
		if($_GET){
			//$uid=$_GET['uid'];
			$cartObj=D('Cart');
			
			//$rst=$cartObj->getBuyBook($uid);
			$rst=$cartObj->getOrder();
			echo json_encode(array('buyBookOrder' => $rst));
			return;
		}
	}
	public function delComment(){
		if($_GET){
			$cid=$_GET['cid'];
			$commentObj=D('Comment');
			$rst=$commentObj->where("cid=".$cid)->delete();
			echo $rst;
		}
	}
	public function addNewBook(){
		if($_POST){
			$bookObj=D('Bookinfo');
			$rst=$bookObj->add($_POST);
			echo $rst;
		}else{
			echo 'error';
		}
	}
	public function updBook(){
		if($_POST){
			$bookObj=D('Bookinfo');
			$rst=$bookObj->data($_POST)->save();
			echo $rst;
		}else{
			echo 'error';
		}
	}
	public function delBook(){
		if($_GET){
			$bid=$_GET['bid'];
			$bookObj=D('Bookinfo');
			$rst=$bookObj->where("bid=".$bid)->delete();
			echo $rst;
		}
	}
	public function getBookByBid(){
		if($_GET){
			$bid=$_GET['bid'];
			$bookObj=D('Bookinfo');
			$rst=$bookObj->getBookDetailByBid($bid);
			echo json_encode(array('bookInfoByBid' => $rst));
		}
	}
	public function delOrderByCid() {
		if($_GET){
			$cid=$_GET['cid'];
			$cartObj=D('Cart');
			$rst=$cartObj->where('cartid='.$cid)->delete();
			echo $rst;
		}
	}
	public function changeStateByCid() {
		if($_GET){
			$cid=$_GET['cid'];
			$state = $_GET['state'];
			$data = array(
				'state' => $state
			);
			$cartObj=D('Cart');
			$rst=$cartObj->where('cartid='.$cid)->save($data);
			echo $rst;
		}
	}
}