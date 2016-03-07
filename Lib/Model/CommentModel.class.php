<?php

class CommentModel extends Model{
	public function addComment($postData){
		$uid=$postData['uid'];
		$bid=$postData['bid'];
		$content=$postData['content'];
		$time=$postData['time'];
		if(!empty($uid) && !empty($bid)){
			if(!empty($content)){

				$addData=array(
					'uid' => $uid,
					'bid' => $bid,
					'content' => $content,
					'time' => $time
				);
				$rst=$this->add($addData);
				return $rst;
			}else{
				return '内容不能为空！';
			}
		}else{
			return '评论失败，还未登录!';
		}
	}

	public function getCommentsByBid($bid,$offset=0,$num=5){
		$rst=$this->where("bid=".$bid)->order("cid desc")->limit($offset,$num)->select();

		$userObj=D('Users');
		$count=count($rst);
		for($i=0;$i<$count;$i++){
			$userinfo=$userObj->where("uid=".$rst[$i]['uid'])->find();
			//show_bug($userinfo);
			if($userinfo){
				$rst[$i]['nickName']=$userinfo['unick'];
				$rst[$i]['photo']=$userinfo['uphoto'];
			}
		}
		return $rst;
	}
}